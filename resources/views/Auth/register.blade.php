@extends('layouts.app')

@section('content')
<div class="flex justify-center">
 <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror " placeholder="name">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
            </div>
           @enderror
        </div>

        <div class="mb-4">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" placeholder="Username">

            @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="emai" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" placeholder="Email">

            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="role" class="sr-only">Role</label>
            <select name="role" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('role') border-red-500 @enderror">
                <option value="admin">Admin</option>
                <option value="regular">Regular</option> 
            </select>
            @error('role')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-4">
<label for="password" class="sr-only">Password</label>
<input type="password" name="password" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " placeholder="Choose a Password">

@error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
@enderror
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-500 rounded-lg p-3 text-white">Register</button>
        </div>
    </form>
     </div>
</div>    
@endsection