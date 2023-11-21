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
<div class="bg white h-screen flex justify-center items-center">
    <div class="bg-gray-100 p-8 rounded shadow-lg max-w-md w-full">
        <form action="{{route('addUser')}}" method="post">
            @csrf
            <h1 class="text-center text-gray-700 font-semibold text-2xl mb-6">Add users</h1>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold">Username</label>
                <input type="text" name="name" id="" placeholder="Username"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('name'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold">Email</label>
                <input type="email" name="email" id="" placeholder="Email"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('email'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('email')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold">Password</label>
                <input type="password" name="password" id="" placeholder="Password"
                       class="border focus:outline-none focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('password'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('password')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold">Role</label>
                <input type="text" name="role" id="" placeholder="Role"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py px-3 rounded w-full transition-all duration-150">
            </div>
            <div class="mt-4">
                <button
                    class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 text-white p-3 rounded w-full duration-300">
                    Add users
                </button>
            </div>
            @if(Session::has('message'))
                <div class="border border-green-500 text-green-300 bg-green-300 p-3 rounded">
                    {{Session::get('message')}}
                </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
