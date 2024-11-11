<x-app-layout>
    @include('components.swallalert')
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Library Book Reservation System</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($books as $book)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Book Cover" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{$book->title}}</h2>
                    <p class="text-gray-700">Author: {{$book->author}}</p>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <button onclick="window.location='{{ url( '/reserve/'.encrypt($book->id)) }}'" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                      
                        Reserve</button>
                </div>
            </div>
            @endforeach
            

        </section>
        </div>
    </div>
</x-app-layout>
