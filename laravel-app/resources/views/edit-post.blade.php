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
<div class="bg-white flex justify-center items-center h-screen">
    <div class="bg-white text-gray-700 rounded-lg max-w-md w-full shadow p-8">
        <h1 class="text-center font-semibold">Edit Post</h1>
        <form action="/edit-posts/{{$post->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" id="" value="{{$post->title}}"
                       class="border text-gray-700 w-full focus:ring focus:outline-none focus:ring-indigo-500 transition-all duration-150 rounded">
            </div>
            <div class="mb-3">
                <textarea name="body" id="" cols="30" rows="15"
                          class="border text-gray-700 w-full focus:ring focus:outline-none focus:ring-indigo-500 transition-all duration-150 rounded">{{$post->body}}</textarea>
            </div>
            <div class="mt-3">
                <button
                    class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 rounded w-full duration-300 text-white p-3">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
