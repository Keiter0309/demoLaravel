<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
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
        <form action="/create-post" method="post">
            @csrf
            <h1 class="text-center font-semibold">Create a New Post</h1>
            <div class="mb-3">
                <label for="" class="block font-semibold">Title</label>
                <input type="text" name="title" id="title" placeholder="Title"
                       class="border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 w-full">
            </div>
            <div class="mb-3">
                <label for="" class="block font-semibold">Body Content</label>
                <textarea name="body" placeholder="Body Content"
                          class="border px-3 py-2 rounded-md text-gray-700 focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 w-full"
                          cols="30" rows="15"></textarea>
            </div>
            <div class="mt-3">
                <button
                    class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:bg-indigo-500 hover:scale-110 duration-300 rounded p-3 w-full text-white">
                    Save Post
                </button>
            </div>
            @if(Session::has('message'))
                <div class="p-3 bg-red-300 border border-red-500 text-red-700 rounded mt-3">
                    {{Session::get('message')}}
                </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
