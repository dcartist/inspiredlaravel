@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/hands.jpg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Support Groups</h1>
</div>
<section class="p-10">

@if ($groups->count())
 @foreach ($groups as $group)
<section class="mb-10">
<h1 class="text-2xl font-bold">{{$group->name}}</h1>
<p>{{$group->description}}</p>
</section>


@endforeach
@else
<p> No groups listed right now</p>

@endif
</section>

@endsection
