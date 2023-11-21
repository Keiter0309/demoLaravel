<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('welcome')
{{--<div class="navbar bg-gray-200 font-semibold z-10">--}}
{{--    <div class="navbar-start">--}}
{{--        <div class="dropdown">--}}
{{--            <label tabindex="0" class="btn btn-ghost lg:hidden">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"--}}
{{--                     stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>--}}
{{--                </svg>--}}
{{--            </label>--}}
{{--            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">--}}
{{--                <li><a>Item 1</a></li>--}}
{{--                <li>--}}
{{--                    <a>Parent</a>--}}
{{--                    <ul class="p-2">--}}
{{--                        <li><a>Submenu 1</a></li>--}}
{{--                        <li><a>Submenu 2</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a>Item 3</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <a class="btn btn-ghost text-xl">daisyUI</a>--}}
{{--    </div>--}}
{{--    <div class="navbar-center hidden lg:flex">--}}
{{--        <ul class="menu menu-horizontal px-1">--}}
{{--            <li class=""><a href="/">Home</a></li>--}}
{{--            <li tabindex="0">--}}
{{--                <details>--}}
{{--                    <summary class="">Examination</summary>--}}
{{--                    <ul class="p-2">--}}
{{--                        <li><a>Submenu 1</a></li>--}}
{{--                        <li><a>Submenu 2</a></li>--}}
{{--                    </ul>--}}
{{--                </details>--}}
{{--            </li>--}}
{{--            @if(!Auth::check())--}}
{{--                <li class=""><a href="/login">Login</a></li>--}}
{{--                <li class=""><a href="/register">Register</a></li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="navbar-end">--}}
{{--        @if(Auth::check())--}}
{{--            <div class="dropdown dropdown-end">--}}
{{--                <label tabindex="0" class="btn btn-ghost btn-circle avatar">--}}
{{--                    <div class="w-10 rounded-full">--}}
{{--                        <img alt="Tailwind CSS Navbar component"--}}
{{--                             src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/311015365_3231956803788765_3209368426686942058_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U94Rlpo4BnkAX9lm7AY&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfA2KO0-zOkPmiaDMZniTtUa9bzX9nrqkOeZY47zxtE6lA&oe=6559D2B3"/>--}}
{{--                    </div>--}}
{{--                </label>--}}
{{--                <ul tabindex="0"--}}
{{--                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">--}}
{{--                    @auth()--}}
{{--                        <li>--}}
{{--                            <a class="">--}}
{{--                               Hi, {{ Auth::user()->name }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endauth--}}
{{--                    <li>--}}
{{--                        <a class="justify-between">--}}
{{--                            Profile--}}
{{--                            <span class="badge">New</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li><a>Settings</a></li>--}}
{{--                    <form action="/logout" method="post">--}}
{{--                        @csrf--}}
{{--                        <li>--}}
{{--                            <button>Logout</button>--}}
{{--                        </li>--}}
{{--                    </form>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</div>--}}
{{--<nav class="bg-white border-gray-200 dark:bg-gray-900">--}}
{{--    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">--}}
{{--        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">--}}
{{--            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"/>--}}
{{--            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>--}}
{{--        </a>--}}
{{--        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">--}}
{{--            <button type="button"--}}
{{--                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"--}}
{{--                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"--}}
{{--                    data-dropdown-placement="bottom">--}}
{{--                <span class="sr-only">Open user menu</span>--}}
{{--                <img class="w-8 h-8 rounded-full"--}}
{{--                     src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/311015365_3231956803788765_3209368426686942058_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U94Rlpo4BnkAX80j3mm&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfALJ83a7BOQbBvD1tzaPHL5cO7Q5oSk3alsmJ0L4MYk_w&oe=6559D2B3"--}}
{{--                     alt="user photo">--}}
{{--            </button>--}}
{{--            <!-- Dropdown menu -->--}}
{{--            <div--}}
{{--                class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"--}}
{{--                id="user-dropdown">--}}
{{--                <div class="px-4 py-3">--}}
{{--                    @auth()--}}
{{--                        <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>--}}
{{--                        <span--}}
{{--                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--                <ul class="py-2" aria-labelledby="user-menu-button">--}}
{{--                    <li>--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#"--}}
{{--                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign--}}
{{--                            out</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <button data-collapse-toggle="navbar-user" type="button"--}}
{{--                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"--}}
{{--                    aria-controls="navbar-user" aria-expanded="false">--}}
{{--                <span class="sr-only">Open main menu</span>--}}
{{--                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                     viewBox="0 0 17 14">--}}
{{--                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M1 1h15M1 7h15M1 13h15"/>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">--}}
{{--            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"--}}
{{--                       aria-current="page">Home</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<section>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-1/2">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="text-left w-full border-collapse">
                        <thead></thead>
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Name
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Email
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Role
                            </th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">{{$user->name}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$user->email}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$user->role}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a href="/profile/{{$user->id}}/edit"
                                       class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-400 transition-all duration-150">Edit</a>
                                    <form action="/profile/{{$user->id}}" method="post" class="deleteForm"
                                          id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="deleteButton"
                                                class="text-gray-700 font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-500 transition-all duration-150 deleteButton">
                                            Delete
                                        </button>
                                        <div class="fixed z-10 inset-0 overflow-y-auto deleteModal hidden"
                                             id="deleteModal"
                                             aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div
                                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                     aria-hidden="true"></div>
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                      aria-hidden="true">&#8203;</span>
                                                <div
                                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="sm:flex sm:items-start">
                                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                    id="">
                                                                    Delete Confirmation
                                                                </h3>
                                                                <div class="mt-2">
                                                                    <p class="text-sm text-gray-500">
                                                                        Are you sure you want to delete this user?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <button type="button" id="confirmDeleteButton"
                                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm confirmDeleteButton">
                                                            Delete
                                                        </button>
                                                        <button type="button" id="cancelButton"
                                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm cancelButton">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="fixed z-10 inset-0 overflow-y-auto acceptModal" id="acceptModal"
                 aria-labelledby="accept-title" role="dialog" aria-modal="true">
                <div
                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                         aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                          aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                        id="">
                                        User deleted successfully
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" id="acceptButton"
                                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-green-500 text-base font-medium hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm cancelButton text-white">
                                Okay!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.deleteButton');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const deleteModal = this.nextElementSibling;
                if (deleteModal) {
                    deleteModal.classList.remove('hidden');
                } else {
                    console.error('Delete modal not found.');
                }
            });

            const cancelButton = button.parentElement.querySelector('.cancelButton');
            cancelButton.addEventListener('click', function () {
                const deleteModal = this.closest('.deleteModal');
                if (deleteModal) {
                    deleteModal.classList.add('hidden');
                } else {
                    console.error('Delete modal not found.');
                }
            });

            const confirmDeleteButton = button.parentElement.querySelector('.confirmDeleteButton');
            confirmDeleteButton.addEventListener('click', function () {
                document.getElementById('deleteForm').submit();
            });
        });

        document.getElementById('acceptButton').addEventListener('click', (event)=>{
            document.getElementById('acceptModal').classList.add('hidden');
        });
    });
</script>


@vite('resources/js/app.js')
{{--<script>--}}
{{--    document.getElementById('deleteButton').addEventListener('click', function (event) {--}}
{{--        event.preventDefault();--}}
{{--        document.getElementById('deleteModal').classList.remove('hidden');--}}
{{--    });--}}

{{--    document.getElementById('cancelButton').addEventListener('click', function () {--}}
{{--        document.getElementById('deleteModal').classList.add('hidden');--}}
{{--    });--}}

{{--    document.getElementById('confirmDeleteButton').addEventListener('click', function () {--}}
{{--        document.getElementById('deleteForm').submit();--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
{{--<div>--}}
{{--    <!-- Other HTML and Blade code -->--}}
{{--    <form id="deleteForm" action="/profile/{{$user->id}}" method="post">--}}
{{--        @csrf--}}
{{--        <button type="submit" id="deleteButton"--}}
{{--                class="text-gray-700 font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-500 transition-all duration-150">--}}
{{--            Delete--}}
{{--        </button>--}}
{{--        <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="deleteModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">--}}
{{--            <!-- Modal content -->--}}
{{--            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">--}}
{{--                @method('DELETE')--}}
{{--                <button type="button" id="confirmDeleteButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">--}}
{{--                    Delete--}}
{{--                </button>--}}
{{--                <button type="button" id="cancelButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">--}}
{{--                    Cancel--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<script>--}}
{{--    document.getElementById('deleteButton').addEventListener('click', function(event) {--}}
{{--        event.preventDefault();--}}
{{--        document.getElementById('deleteModal').classList.remove('hidden');--}}
{{--    });--}}

{{--    document.getElementById('cancelButton').addEventListener('click', function() {--}}
{{--        document.getElementById('deleteModal').classList.add('hidden');--}}
{{--    });--}}

{{--    document.getElementById('confirmDeleteButton').addEventListener('click', function() {--}}
{{--        document.getElementById('deleteForm').submit();--}}
{{--    });--}}
{{--</script>--}}
