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
<section class="bg-white h-screen flex justify-center items-center">
    <div class="bg-gray-100 p-8 rounded shadow-lg max-w-md w-full">
        <form action="{{route('profile.update',$user->id)}}" method="post">
            <h1 class="text-center text-gray-700 font-semibold text-2xl mb-6">Edit users</h1>
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold mb-3">Username</label>
                <input type="text" name="name" id="" placeholder="Username" value="{{$user->name}}"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('name'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold mb-3">Email</label>
                <input type="email" name="email" id="" placeholder="Email" value="{{$user->email}}"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('email'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('email')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold mb-3">Password</label>
                <input type="password" name="password" id="" placeholder="Password" value="{{$user->password}}"
                       class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('password'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('password')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 font-bold mb-3">Role</label>
                <input type="text" name="role" id="" placeholder="Role" value="{{ auth()->user()->role }}"
                    {{ auth()->user()->role == 'user' ? 'disabled' : '' }} class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-150">
                @if($errors->has('role'))
                    <span class="text-red-500 text-sm">
                        {{$errors->first('role')}}
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <button
                    class="transition delay-150 bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 text-white rounded p-3 w-full">
                    Update
                </button>
            </div>
            @if(Session::has('success'))
                <div class="block bg-green-400 border border-green-700 text-green-800 py-2 px-3 rounded">
                    {{Session::get('success')}}
                </div>
            @endif
        </form>
    </div>
</section>
</body>
</html>
