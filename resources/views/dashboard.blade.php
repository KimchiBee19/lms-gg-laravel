<x-app-layout>
    <x-slot name="header">
        <h2 class="text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("You're logged in!") }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="header pt-8">
        <h1 class="text-4xl text-center font-semibold">Books Collection</h1>
    </div> -->

    <div class="books-card py-10 px-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="p-8 md:py-8">
                <img class="object-contain w-full rounded-lg shadow-md md:h-80" src="https://www.gramedia.com/blog/content/images/2022/09/1-3.jpg" alt="">
            </div>
            <hr class="w-3/4 border-gray-300">
            <div class="flex flex-col justify-between text-center p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laut Bercerita</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Author: Leila S. Chudori</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="p-8 md:py-8">
                <img class="object-contain w-full rounded-lg shadow-md md:h-80" src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2024/1/20/qvjtc65vbzmexfegzrgs7u.jpg" alt="">
            </div>
            <hr class="w-3/4 border-gray-300">
            <div class="flex flex-col justify-between text-center p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The Psychology of Money</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Author: Morgan Housel</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="p-8 md:py-8">
                <img class="object-contain w-full rounded-lg shadow-md md:h-80" src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/_Kover_Depan_The_Maxwell_Daily_Reader.jpg" alt="">
            </div>
            <hr class="w-3/4 border-gray-300">
            <div class="flex flex-col justify-between text-center p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The Maxwell Daily Reader</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Author: John C. Maxwell</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="p-8 md:py-8">
                <img class="object-contain w-full rounded-lg shadow-md md:h-80" src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/Home_Sweet_Loan_cov.jpg" alt="">
            </div>
            <hr class="w-3/4 border-gray-300">
            <div class="flex flex-col justify-between text-center p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Home Sweet Loan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Author: Almira Bastari</p>
            </div>
        </a>
    </div>
</x-app-layout>
