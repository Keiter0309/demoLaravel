<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD APP</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen">
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
@if(Auth::check())
    <div class="flex justify-center p-4 font-semibold">All Posts</div>
@endif
@foreach($posts as $post)
    <div class="bg-gray-100 border border-indigo-700 mt-3 rounded p-4">
        <h3 class="text-lg font-bold mb-2">Title: {{$post['title']}}</h3>
        <p class="mb-4">Content: {{$post['body']}}</p>

        <div class="flex items-center space-x-4">
            <a href="/edit-posts/{{$post->id}}"
               class="bg-blue-500 hover:bg-indigo-500 text-white py-2 px-4 rounded transition-transform transform hover:scale-105 duration-300">
                Edit
            </a>

            <form action="/delete-posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-rose-600 hover:bg-red-600 text-white py-2 px-4 rounded transition-transform transform hover:scale-105 duration-300">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endforeach
</body>
</html>
