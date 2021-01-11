@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/poly.svg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Directory</h1>
</div>
@if ($directories->count())
<div>{{$directories->links()}}</div>
<div class="grid grid-cols-2 sm:grid-cols-2 sm:grid md:grid-cols-4   lg:grid lg:grid-cols-4 gap-2 ">
    @foreach($directories as $directory)
    <div class="m-3">
        <h1 class="text-2xl">
            {{$directory->name}}
        </h1>
        <p class="text-sm"> {{$directory->description}}
        </p>
        <a href="{{$directory->url}}" target="blank">
            <button class="bg-black text-white p-2 text-sm mt-3">Go to website</button>
        </a>
    </div>
    @endforeach
    @else
    <p>Theree's no directory listing</p>
    @endif
</div>

{{$directories->links()}}
@endsection
