@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/hands.jpg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">About Inspired Tech Life</h1>
</div>
<h1 class="text-8xl text-center font-extralight pt-4">
    Don't suffer in silence!
</h1>
<section class="p-10 ml-5 mr-5 grid grid-cols-4">
<div>
<img src="{{asset('/images/paulabannerman.jpg')}}" class="w-72">
</div>
<div class="col-span-3 flex items-center">
Create by Paula Bannerman <a href=""><span>www.dcartist.studio</span></a> as a  prototype for a community for developers, designers, data scientists, and beyond. This is meant to be able to help those in the tech world to find help and support via groups, mantras, and being able to find support sources.
</div>

</section>

@endsection
