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
<div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
    <button
        class="p-1 text-gray-500 rounded hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
        id="menuButton">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</div>
<div
    class="md:w-64 p-4 shadow-lg bg-gray-800 overflow-auto h-full fixed left-0 top-0 transition-transform duration-200 transform -translate-x-full md:translate-x-0"
    id="menu">
    <div class="flex">
        <h2 class="text-2xl font-bold mb-1 text-white">Admin Dashboard</h2>
        <button
            class="text-gray-500 rounded hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white ml-3 text-xl lg:hidden"
            id="adminButton">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>

        </button>
    </div>
    <ul>
        <li>
            <h3 class="text-gray-100 my-3">Menu</h3>
        </li>
        <li><a href="{{route('profile.index')}}"
               class="block py-1 px-3 rounded hover:bg-indigo-500 transition duration-150 ease-in-out text-white">Users</a>
        </li>
        <li><a href="{{route('addUser')}}"
               class="block py-1 px-3 rounded hover:bg-indigo-500 transition duration-150 ease-in-out text-white">Add
                users</a>
        </li>
        <li><a href=""
               class="block py-1 px-3 rounded hover:bg-indigo-500 transition duration-150 ease-in-out text-white">Post</a>
        </li>
        <li><a href=""
               class="block py-1 px-3 rounded hover:bg-indigo-500 transition duration-150 ease-in-out text-white">Setting</a>
        </li>
        <li><a href=""
               class="block py-1 px-3 rounded hover:bg-indigo-500 transition duration-150 ease-in-out text-white">Home</a>
        </li>
    </ul>
</div>
</body>
<script>
    document.getElementById('menuButton').addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById('menu').classList.toggle('-translate-x-full');
        document.getElementById('menu').classList.toggle('opacity-100');
    });
    document.getElementById('adminButton').addEventListener('click', (event) => {
        event.preventDefault();
        document.getElementById('menu').classList.toggle('-translate-x-full');
    })
</script>
</html>
