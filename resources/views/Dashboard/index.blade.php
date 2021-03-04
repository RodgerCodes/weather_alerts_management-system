@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div class=" w-10/12 bg-white rounded-lg p-6">
       <div class="flex justify-between">
        <h1 class="font-bold text-4xl">Dashboard</h1>
        <a href="{{route('add')}}" class="p-3 bg-blue-500 rounded-lg text-white font-medium text-lg mb-4">New Alert</a>
       </div>
        @if ($alerts->count())
            @foreach ($alerts as $alert)
                <div class="mb-4 mt-10 @if($alert->severity == 'high') bg-red-500 @elseif($alert->severity == 'medium') bg-yellow-500 @else bg-green-500 @endif p-6 rounded-lg flex justify-between">
                   <div>
                    <h1 class="text-2xl">{{$alert->event}}</h1>
                    <h4 class="text-white text-xl">Severity: {{$alert->severity}}</h4>
                   </div>
                  <div>
                      <a href="" class="p-2 bg-blue-500 text-white mb-4">Edit</a>
                      <form action="">
                          <button type="submit" class="bg-blue-500 text-white p-2 mt-3">Delete</button>
                      </form>
                  </div>
                </div>
            @endforeach
        @else
            <p>No alerts</p>
        @endif
       
      </div>
    </div>
@endsection