@extends('base')

@section('content')

<form>
    <div><label>Bio</label>
    <input type="text" name="bio">
    </div>
    <div>
        <label>Your Portfolio Link</label>
        <input type="text" name="url">
    </div>
    <div>Skills
    <input type="text" name="skills" placeholder="add skills"></div>
    <div>
        Do you want to be a mentor?
        <input type="checkbox" name="mentor" value="true" checked>
    </div>

    
    

</form>

@endsection