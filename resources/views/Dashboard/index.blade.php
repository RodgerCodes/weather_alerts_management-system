@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div class=" w-10/12 bg-white rounded-lg p-6">
       <div class="flex justify-between">
        <h1 class="font-bold text-2xl">Dashboard</h1>
        <a href="{{route('add')}}" class="p-3 bg-blue-500 rounded-lg text-white font-medium text-lg mb-4">New Alert</a>
        @if ($alerts->count())
            @foreach ($alerts as $alert)
                <div class="mb-4">
                   
                </div>
            @endforeach
        @else
            <p>No alerts</p>
        @endif
       </div>
      </div>
    </div>
@endsection