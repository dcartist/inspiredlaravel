@extends('base')
@section('content')
@if ($profiles->count())
@foreach($profiles as $profile)
<div class="bg-{{$profile->color}}-900 p-3">
<h1 class="text-3xl text-white">
{{auth()->user()->username}}
</h1>
</div>
<div class="p-10 flex justify-center ">
<div class="w-1/2 p-10">
            <h2 class="text-2xl text-{{$profile->color}}-700">Bio</h2>
            {{$profile->bio}}
            <h2 class="text-2xl text-{{$profile->color}}-700">Url</h2>
            {{$profile->url}}
            <h2 class="text-2xl text-{{$profile->color}}-700">Skills</h2>
            {{$profile->skills}}
</div>
</div>
@endforeach

@else
<p>Theree's no profile</p>
@endif
@endsection
