@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/poly.svg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Contact</h1>
</div>
<div class="flex justify-center">
<section class="p-15 w-1/2 h-full">
<h2 class="text-3xl font-bold">Creator</h2>
<h3 class="text-2xl font-light">Paula Bannerman</h3>
<h3 class="text-sm font-light mb-3">@dcartist</h3>

<hr>
<div class="grid grid-cols-3 gap-y-2.5">
    <div><i class="fas fa-globe"> <span>Portfolio</span></i>
<h3 class="mb-3 text-sm"><a href="https://www.dcartist.studio" target="_blank" class="text-sm text-blue-700">dcartist.studio</a></h3></div>
    <div><i class="fas fa-envelope"> <span>Email</span></i>
<h3 class="text-sm mb-2 "><a href="mailto:pbannerman13@gmail.com" target="_blank" class="text-sm text-blue-700">Pbannerman13@gmail.com</a></h3></div>
    <div><i class="fab fa-github"> <span>Github</span></i>
<h3 class="mb-2"><a href="https://github.com/dcartist" target="_blank" class="text-sm text-blue-700">github.com/dcartist</a></h3></div>
    <div><i class="fab fa-linkedin-in"> <span>LinkedIn</span></i>
<h3 class="mb-2"><a href="https://www.linkedin.com/in/dcartist" target="_blank" class="text-sm text-blue-700">linkedin.com/in/dcartist</a></h3></div>
    <div><i class="fab fa-twitter"> <span>Twitter</span></i>
<h3 class="mb-2"><a href="https://www.twitter.com/dcartist" target="_blank" class="text-sm text-blue-700">twitter.com/dcartist</a></h3></div>
    <div><i class="fab fa-instagram"> <span>Instagram</span></i>
<h3 class="mb-2"><a href="https://www.instagram.com/dcartist" target="_blank" class="text-sm text-blue-700">@dcartist</a></h3></div>
</div>





</section>
</div>
@endsection
