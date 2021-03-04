@extends('layouts.app')

@section('content')
 <div class="flex justify-center">
     <div class="w-10/12 bg-white p-6 rounded-lg">
        <form action="{{route('add.store')}}" method="POST">
           @csrf
            <div class="mb-4">
                <label for="event" class="font-bold text-lg">Event</label>
                <select name="event" class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                    <option value="thunderstorm">Thunderstorm</option>
                    <option value="floods">Floods</option>
                    <option value="winds">Strong winds</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="severity" class="font-bold text-lg">Severity</label>
                <select name="severity" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    <option value="low">Low</option>
                </select>
            </div>
           
           <div class="mb-4">
               <label for="region" class="font-bold text-lg">Region</label>
               <select name="region" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                   <option value="lower shire">Lower shire</option>
                   <option value="north">North</option>
                   <option value="south">South</option>
               </select>
           </div>
           <div class="mb-4">
               <textarea name="guidelines" id="" cols="30" rows="8" class="bg-gray-100 w-full border-2 p-3 rounded-lg @error('guidelines') border-red-500 @enderror" placeholder="Guidelines!"></textarea>
               @error('guidelines')
                   <div class="text-red-500 text-sm">
                       {{$message}}
                   </div>
               @enderror
           </div>
           <div class="mb-4">
               <button type="submit" class="w-full bg-blue-500 p-4 text-white rounded-lg text-xl">Submit</button>
           </div>
        </form>
     </div>
</div>    
@endsection