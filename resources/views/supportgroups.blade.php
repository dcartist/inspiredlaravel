@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/poly.svg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Support Groups</h1>
</div>
<div class="pt-1"><x-alert/></div>
<section class="p-10 flex justify-center flex-center flex-column">
<div>
<h2 class="text-2xl">Support groups are groups for people to come together over specific issues.</h2>
<p class="mt-2">Initial Groups:</p>
<ul class="list-disc ml-10 mr-10 mb-10 mt-3">
    <li><span class="font-bold">Mentor Meetup:</span> Find a mentor and be a mentor</li>
    <li><span class="font-bold">Get Inspired:</span> Find ideas and inspiration from other users.</li>
    <li><span class="font-bold">Talk:</span> Do you need an ear? This is the place to go.</li>
    <li><span class="font-bold">Dev Help!!</span> A place where developers can get help with their code.</li>
    <li><span class="font-bold">Design Circle:</span> A place where designers can get help with their code.</li>
    <li><span class="font-bold">Data & Data:</span> A place where data scientists can get help with their code.</li>
    <p class="text-sm mt-4">*Due to being a prototype the groups are disabled right now.</p>
</ul>
</div>
@if ($groups->count())
<div class="flex flex-wrap gap-x-7 w-full">
 @foreach ($groups as $group)
<section class="mb-10 w-72 flex-grow">
<div class=" w-auto bg-blue-100 h-40 flex items-center justify-center flex-col"><span class="text-5xl text-blue-300">PROTOYPE</span><p class="text-blue-300">group is disabled</p></div>
<div class="bg-black text-white p-3 h-50" ><h1 class="text-2xl font-bold">{{$group->name}}</h1>
<p class="text-sm">{{$group->description}}</p></div>
</section>

@endforeach
</div>
@else
<p> No groups listed right now</p>

@endif
</section>

@endsection
