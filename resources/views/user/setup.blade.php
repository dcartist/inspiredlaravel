@extends('base')

@section('content')

<form method="POST" action="{{route('userProfileSetup')}}">
    @csrf
    <div>
        <p><label>Bio</label></p>
        <textarea rows="4" cols="50" name="bio" class="border-2">
    </textarea>
    </div>
    <div>
        <p><label>Your Portfolio Link</label></p>
        <input type="text" name="url" class="border-2">
    </div>
    <div>
        1
        <input name="avatar" type="radio" value="1">
        2
        <input name="avatar" type="radio" value="2">
        3
        <input name="avatar" type="radio" value="3">
    </div>
    <div>Color
        <select name="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="black">Black</option>
            <option value="black">Green</option>
        </select>
    </div>


    <div>
        <p>
            <labe>Skills</labe>
        </p>
        <input type="text" name="skills" placeholder="add skills" class="border-2">
    </div>
    <div>
        <p>Do you want to be a mentor?</p>
        <input type="checkbox" name="mentor" value="true" checked>
    </div>

    <button type="submit"> Submit your form</button>


</form>

@endsection