<x-app-layout>
<nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-md">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        
        <!-- Logo -->
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        
        <!-- Flex Container untuk Search Bar dan Profil -->
        <div class="flex space-x-4 w-full md:justify-between">

            <form action="/posts" method="GET" class="w-full justify-center">

                <!-- Search Bar untuk Desktop -->
                <div class="hidden md:flex md:mx-auto md:w-1/2 lg:w-1/3">
                    <div class="relative w-full">
                        <label for="search"></label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" name="search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                    </div>
                </div>

                <!-- Search Bar untuk Mobile -->
                <div class="md:hidden w-full pl-8 flex justify-center" id="navbar-search">
                    <div class="relative w-3/4">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                    </div>
                </div>

            </form>

            <!-- Tombol Profil -->
            <div class="flex items-center">
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <div class="flex items-center justify-center w-10 h-10 rounded-full overflow-hidden">
                        <img src="https://i.pinimg.com/236x/7a/ac/85/7aac85715be2416d52ffbf44e1d16be2.jpg" alt="user photo" class="w-full h-full object-cover">
                    </div>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Karina Yu</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">karinayu@library.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Reserve book</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>

<div class="header pt-8">
    <h1 class="text-4xl text-center font-semibold">Books Collection</h1>
</div>

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