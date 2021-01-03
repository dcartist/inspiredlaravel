@extends('base')

@section('content')
<div class="flex justify-center">
    <div class="bg-gray-100 p-5 w-1/2 shadow-lg">
    <!-- <form> -->
        <form method="POST" action="{{route('register')}}">
            @csrf
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="p-2 w-full border-2 mb-4"
                value="{{old('name')}}">
            <label>Username</label>
            @error('username')
            <div class="text-sm text-red-600">{{$message}}</div>
            @enderror
            <input type="text" name="username" id="username" placeholder="UserName" onkeyup="forceLower(this)" class="p-2 w-full border-2 mb-4 @error('username') border-2 border-red-500 @enderror"
                value="{{old('username')}}">
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

            <label>Confirm Password</label>
            @error('password_confirmation')
             <div class="text-sm text-red-600">{{$message}}</div>
            @enderror
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm Password" class="p-2 w-full border-2 @error('password') border-2 border-red-500 @enderror" value="">

            <input type="submit" class="bg-gray-800 text-white rounded p-2 mt-10">
        </form>
    </div>
</div>


@endsection
