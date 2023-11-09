<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<div class="bg-white p-8 max-w-md rounded-lg w-full">
    <h1 class="text-3xl font-bold mb-6 text-center">Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="mb-4">
            <label for="" class="block font-semibold mb-2 text-gray-700">Username</label>
            <input type="text" name="loginName" id="name" placeholder="Username"
                   class="w-full border rounded-md py-2 px-3 text-gray-700 focus:ring focus:ring-indigo-500 focus:outline-none transition-all duration-150">
        </div>
        <div class="mb-4">
            <label for="" class="block font-semibold mb-2 text-gray-700">Password</label>
            <input type="password" name="loginPassword" id="password" placeholder="Password"
                   class="w-full border rounded-md py-2 px-3 text-gray-700 focus:ring focus:ring-indigo-500 focus:outline-none transition-all duration-150">
        </div>
        <div class="mt-4">
            <button
                class="w-full transition ease-in-out rounded-lg p-3 delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white">
                Login
            </button>
        </div>
        @if(session('error'))
            <div class="mt-3 p-3 text-xl font-medium text-red-400 rounded-lg border border-red-500 bg-red-200">
                {{session('error')}}
            </div>
        @endif
    </form>
</div>
</div>
</body>
</html>
