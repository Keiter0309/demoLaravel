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
<div class="w-full flex justify-between text-white p-8 rounded bg-indigo-500 font-semibold items-center">
    <div class="">Brand</div>
    <div class="flex justify-center">
        <ul class="flex justify-between space-x-14">
            <li class="hover:text-indigo-900 transition-all duration-150 ease-in-out cursor-pointer"><a
                    href="/">Home</a></li>
            <li class="hover:text-indigo-900 transition-all duration-150 ease-in-out cursor-pointer"><a
                    href="/examination">Examination</a></li>
            @if(!Auth::check())
                <li class="hover:text-indigo-900 transition-all duration-150 ease-in-out cursor-pointer"><a
                        href="/login">Login</a></li>
                <li class="hover:text-indigo-900 transition-all duration-150 ease-in-out cursor-pointer"><a
                        href="/register">Register</a></li>
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
    <div class="flex justify-center items-center text-indigo-500 text-2xl font-semibold">
        <p>Simple Quiz</p>
    </div>
    <div class="h-screen flex justify-center items-center w-full">
        <div class="bg-white rounded shadow-lg p-8 max-w-md w-full">
            <p class="text-2xl font-semibold">Question 1</p>
            <div class="mt-3">
                <div class="border border-gray-500 rounded px-3 py-2 hover:bg-gray-200 transition-all duration-200 ease-in-out hover:cursor-pointer">Answer 1</div>
            </div>
            <div class="mt-3">
                <div class="border border-gray-500 rounded px-3 py-2 hover:bg-gray-200 transition-all duration-200 ease-in-out hover:cursor-pointer">Answer 2</div>
            </div>
            <div class="mt-3">
                <div class="border border-gray-500 rounded px-3 py-2 hover:bg-gray-200 transition-all duration-200 ease-in-out hover:cursor-pointer">Answer 3</div>
            </div>
            <div class="mt-3">
                <div class="border border-gray-500 rounded px-3 py-2 hover:bg-gray-200 transition-all duration-200 ease-in-out hover:cursor-pointer">Answer 4</div>
            </div>
            <div class="mt-3 flex justify-end">
                <button
                    class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 w-1/3 text-white p-2 rounded-xl">Next</button>
            </div>
        </div>
    </div>
</body>
</html>
