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

<div class="navbar bg-gray-200 font-semibold">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Item 1</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li class=""><a href="/">Home</a></li>
            <li tabindex="0">
                <details>
                    <summary class="">Examination</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            @if(!Auth::check())
                <li class=""><a href="/login">Login</a></li>
                <li class=""><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
    <div class="navbar-end">
        @if(Auth::check())
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                             src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/311015365_3231956803788765_3209368426686942058_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U94Rlpo4BnkAX9lm7AY&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfA2KO0-zOkPmiaDMZniTtUa9bzX9nrqkOeZY47zxtE6lA&oe=6559D2B3"/>
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/profile" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <form action="/logout" method="post">
                        @csrf
                        <li>
                            <button>Logout</button>
                        </li>
                    </form>
                </ul>
            </div>
        @endif
    </div>
</div>

<div class="bg-white flex justify-center items-center h-screen">
    <div class="bg-gray-50 text-gray-700 rounded-lg max-w-md w-full shadow-lg p-8">
        <form action="/login" method="post">
            @csrf
            <h1 class="text-gray-700 text-center font-semibold text-2xl">Login</h1>
            <div class="mb-5">
                <label for="">Username</label>
                <input type="text" name="loginName" id="" placeholder="Username"
                       class="border py-2 px-3 focus:outline-none focus:ring focus:ring-indigo-500 rounded transition-all duration-150 w-full shadow">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="loginPassword" id="" placeholder="Password"
                       class="border py-2 px-3 focus:outline-none focus:ring focus:ring-indigo-500 rounded transition-all duration-150 w-full shadow">
            </div>
            <div class="mb-3 flex justify-end">
                <a href="{{route('forget.password')}}" class="hover:text-blue-500 hover:underline transition-all duration-150 ">Forgot password</a>
            </div>
            <div class="mt-5">
                <button
                    class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 rounded p-3 text-white w-full">
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
