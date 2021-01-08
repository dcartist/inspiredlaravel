@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/hands.jpg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Directory</h1>


</div>
<div>
@if ($directories->count())
            @foreach($directories as $directory)
            {{$directory->name}}
            {{$directory->description}}
            {{$directory->url}}

            @endforeach

            {{$directories->links()}}
            @else
            <p>Theree's no blogs listed</p>
            @endif
</div>

@endsection
