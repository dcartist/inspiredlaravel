@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/hands.jpg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Blog</h1>
</div>
<section class="p-15">

    <p>This is the about section</p>
    @if ($blogs->count())
            @foreach($blogs as $blog)
            {{$blog->title}}
            {{$blog->body}}

            @endforeach

            {{$blogs->links()}}
            @else
            <p>Theree's no blogs listed</p>
            @endif

</section>

@endsection
