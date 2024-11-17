<x-app-layout>
    @include('components.swallalert')
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Library Book Reservation System</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container mx-auto p-6">
        
        @if($reserves->isEmpty())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
                <p class="font-bold">No Reservations Found</p>
                <p>There are currently no book reservations available.</p>
            </div>
        @else
            <table  id="reservation_table" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Reservation Date</th>
                        <th scope="col">Return Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($reserves as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->book_id }}</td>
                            @php
                                $waktu_pinjam = \Carbon\Carbon::parse($reservation->waktu_pinjam)->format('d-m-Y');
                                $waktu_kembali = \Carbon\Carbon::parse($reservation->waktu_kembali)->format('d-m-Y');
                            @endphp
                            <td>{{ $waktu_pinjam }}</td>
                            <td>{{ $waktu_kembali }}</td>
                            @php
                                if ($reservation->status == "Pending") $class = 'bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded';
                                if ($reservation->status == "In Process") $class = 'bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded';
                                if ($reservation->status == "Completed") $class = 'bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded';
                                if ($reservation->status == "Overdue") $class = 'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded';
                            @endphp
                            <td><span class="{{ $class }}">{{ $reservation->status }}</span></td>
                            <td>
                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reserve.destroy', encrypt($reservation->id)) }}" method="POST" class="inline-block ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDialog('{{ $reservation->id }}')" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#reservation_table').DataTable({
            // Optional: You can customize DataTables options here
            paging: true,
            searching: true,
            ordering: true,
            info: true,
            lengthChange: true,
            scrollX: true,
            autoWidth: false
        });
    });
    </script>

    
<script>
    function confirmDialog(reserve_id) {
        event.preventDefault();
        
        Swal.fire({
            title: `Apakah Kamu Yakin akan Menghapus Data Ini ?`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: `Ya, Hapus`,
            confirmButtonColor: "#2463eb",
            cancelButtonText: "Batal",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + reserve_id).submit();
            }
        });
    }
</script>

</x-app-layout>