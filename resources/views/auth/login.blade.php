@extends('base')

@section('content')

<div class="flex justify-center">
    <div class="bg-gray-100 p-5 w-1/2 shadow-lg mt-10">
    <!-- <form> -->
        <form method="POST" action="{{route('login')}}">
            @csrf
            <label>Email</label>
            @error('email')
            <div class="text-sm text-red-600">{{$message}}</div>
            @enderror
            <input type="text" name="email" onkeyup="forceLower(this)"  id="email" placeholder="Email" class="p-2 w-full border-2 mb-4 @error('email') border-2 border-red-500 @enderror"
                value="{{old('email')}}">

            <label>Password</label>
            @error('password')
             <div class="text-sm text-red-600">{{$message}}</div>
            @enderror
            <input type="password" name="password" id="password" placeholder="Password" class="p-2 w-full border-2 mb-4 @error('password') border-2 border-red-500 @enderror"
                value="">


            <input type="submit" class="bg-gray-800 text-white rounded p-2 mt-10">
        </form>
    </div>
</div>

@endsection
