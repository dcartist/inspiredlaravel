@extends('base')
@section('content')
Inspire section
<div>
<h1>Categories</h1>

<section class="flex inspireSection">
    <a href="{{route('imposter')}}" class="shadow-2xl m-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"><div>Imposter Syndrome</div></a>
    <a href="{{route('mantra')}}" class="shadow-2xl m-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"><div>Mantras</div></a>
</section>

</div>
@endsection
