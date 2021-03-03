@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-32 h-8/12">
    <div class="flex bg-white w-8/12 justify-between rounded-lg">
  <div class="bg-gray-100 flex items-center rounded-lg">
      <img width="400" src="{{asset('img/wl.png')}}" alt="">
  </div>
   
    <div class="w-6/12 p-6 rounded-lg">
        @if(session('status'))
          <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center ">
            {{session('status')}}
          </div>
        @endif
       <form action="{{route('login.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="" class="sr-only">Email</label>
            <input type="email" name="email" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" placeholder="Email">
            @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
@enderror
        </div>
        <div class="mb-4">
            <label for="" class="sr-only">Password</label>
            <input type="password" name="password" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" placeholder="Password">
            @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{$message}}
    </div>
@enderror
        </div>
        <div class="mb-4">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember ME</label>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full p-3 bg-blue-500 rounded-lg text-white">Login</button>
        </div>
    </form>
    </div>
</div>
</div>
    
@endsection