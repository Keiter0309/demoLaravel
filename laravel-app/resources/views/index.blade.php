<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<div class="flex justify-between font-semibold text-white w-full m-auto rounded bg-indigo-500 h-20 items-center">
    <h1 class="ms-3">NORDICS</h1>
    <div class="">
        <ul class="flex justify-between space-x-14 w-full">
            <li><a href="/home" class="hover:text-indigo-900 transition-all duration-200 ease-in-out">Home</a></li>
            <li><a href="/create-post" class="hover:text-indigo-900 transition-all duration-200 ease-in-out">Create a
                    Post</a></li>
            @if(!Auth::check())
                <li>
                    <a href="/login" class="hover:text-indigo-900 transition-all duration-200 ease-in-out">Login</a>
                </li>
                <li>
                    <a href="/register"
                       class="hover:text-indigo-900 transition-all duration-200 ease-in-out">Register</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="mr-3">
        @auth
            Hi, {{ Auth::user()->name}}
        @endauth
        @if(Auth::check())
            <form action="/logout" method="post" class="text-center">
                @csrf
                <button class="hover:text-indigo-900 transition-all duration-200 ease-in-out">Logout</button>
            </form>
        @endif
    </div>
</div>
<div class="bg-gray-100 flex justify-center items-center h-screen">
<div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
    <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>
    <form action="/register" method="post">
        @csrf
        <div class="mb-4">
            <label for="" class="block text-gray-700 font-semibold mb-2">Username</label>
            <input type="text" id="" name="name" placeholder="Username"
                   class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-500 transition-all duration-150">
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" id="" name="email" placeholder="Email"
                   class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-500 transition-all duration-150">
        </div>

        <div class="mb-4">
            <label for="" class="block text-gray-700 font-semibold mb-2">Password</label>
            <input type="password" id="" name="password" placeholder="Password"
                   class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-blue-500 transition-all duration-150">
        </div>
        <button
            type="submit"
            class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white p-4 w-full rounded">
            Register
        </button>
        @if(Session::has('message'))
            <div class="mt-3 bg-red-300 text-red-400 border border-red-500 font-bold rounded p-3">
                {{Session::get('message')}}
            </div>
        @endif
    </form>
</div>
</div>
</body>
</html>
