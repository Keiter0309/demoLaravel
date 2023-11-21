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
@include('welcome')
<body>
<div class="h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white shadow-lg rounded p-8 max-w-md w-full">
        <h1 class="text-gray-700 text-center font-semibold text-2xl">Reset password</h1>
        <form action="{{route('forget.password.post')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-semibold">Email</label>
                <input type="email" name="email" id="" placeholder="Email"
                       class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
            </div>
            <div class="mb-4">
                <button type="submit"
                        class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 rounded w-full p-3 text-white">
                    Send Password Reset Link
                </button>
            </div>
            @if($errors->any())
                <div class="border border-red-700 bg-red-300 text-red-700 rounded p-3 text-center">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="border border-red-700 bg-red-300 text-red-700 rounded p-3 text-center">
                    {{session::get('error')}}
                </div>
            @endif
            @if(session()->has('message'))
                <div class="border border-green-700 bg-green-300 text-green-700 rounded p-3 text-center">
                    {{session('message')}}
                </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
