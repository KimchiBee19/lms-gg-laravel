<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">{{$book->title}}</h1>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="flex flex-col lg:flex-row">
                <div class="flex-shrink-0">
                    <img src="{{ asset($book->image) }}" alt="Book Cover" class="w-48 h-72 object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Details</h2>
                    <p class="text-gray-700 mt-2"><strong>Author:</strong> {{$book->author}}</p>
                    <p class="text-gray-700"><strong>Publisher:</strong> {{$book->publisher}}</p>
                    <p class="text-gray-700"><strong>Year:</strong> {{ $book->year}}</p>
                    <p class="text-gray-700"><strong>Pages:</strong> {{ $book->pages}}</p>
                    <p class="text-gray-700"><strong>Genre:</strong> {{ $book->genre->name ?? 'N/A' }}</p>
                    <p class="text-gray-700"><strong>Quota:</strong> {{ $book->quota}}</p>
                    <h3 class="text-lg font-semibold mt-4">Summary</h3>
                    <p class="text-gray-600">{{ $book->summary }}</p>
                    <h3 class="text-lg font-semibold mt-4">Description</h3>
                    <p class="text-gray-600">{{ $book->description }}</p>
                </div>
            </div>
            <div class="p-4 bg-gray-50 text-right">
<<<<<<< Updated upstream
                
                <button type="button" onclick="window.location.href='{{ url('/reserve/' . encrypt($book->id)) }}'" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">
                    Reserve this book
                </button>
                <form id="delete-form-{{ $book->id }}" action="{{ route('book.destroy', encrypt($book->id)) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDialog('{{ $book->id }}')" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Delete</button>
                </form>
=======
                <!-- User -->
                @can('reserve-book')
                    <button type="button" onclick="window.location.href='{{ url('/reserve/' . encrypt($book->id)) }}'" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition ease-in-out duration-200">
                        Reserve this book
                    </button>
                @endcan

                <!-- Admin -->
                @can('update-book')
                    <button type="button" onclick="window.location.href='{{ url('book/edit', $book->id) }}'" 
                        class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition ease-in-out duration-200">
                            Edit
                        </button>
                @endcan
                
                @can('delete-book')
                    <form id="delete-form-{{ $book->id }}" action="{{ route('book.destroy', encrypt($book->id)) }}" method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDialog('{{ $book->id }}')" 
                        class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition ease-in-out duration-200">
                            Delete
                        </button>
                    </form>
                @endcan
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
    
    
<script>
    function confirmDialog($id) {
        event.preventDefault();
        
        Swal.fire({
            title: `Apakah Kamu Yakin akan Menghapus Buku Ini ?`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: `Ya, Hapus`,
            confirmButtonColor: "#2463eb",
            cancelButtonText: "Batal",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + $id).submit();
            }
        });
    }
</script>


</x-app-layout>