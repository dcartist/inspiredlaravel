@extends('base')

@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/poly.svg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">About Inspired Tech Life</h1>
</div>
<section class="flex justify-center">
<div class="w-5/6">

<h1 class="text-8xl text-center font-extralight pt-4 mb-10"> Don't suffer in silence!
</h1>
<section class="p-10 ml-5 mr-5 aboutSection">
<h3 class="text-3xl font-bold mb-1">Status: <span class="text-xl font-light">Prototype</span></h3>
    <p>Due to time limit there are sections that still are under construction.</p>
    <h3 class="text-3xl font-bold mb-1">About</h3>
    <p>Dreamed up during the Digital Ocean hackathon, Inspired Tech life is a community for developers, designers, data scientists, and beyond. ITF's purpose is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.</p>

    <p>ITF is developed with Laravel 8, PHP, and Postgres SQL on the Digital Ocean Platform.</p>
    <div class="flex w-full justify-around frameworks mt-10">
        <i class="fab fa-php text-7xl text-center"><p class="text-sm font-bold mt-2">PHP</p></i>
        <i class="fab fa-laravel text-7xl text-center"><p class="text-sm font-bold mt-2">Laravel</p></i>
        <i class="fab fa-digital-ocean text-7xl text-center"><p class="text-sm font-bold mt-2">Digital Ocean</p></i>
        <i class="fas fa-database text-7xl text-center"><p class="text-sm font-bold mt-2">Postgres SQL</p></i>
        <i class="fab fa-node-js text-7xl text-center"><p class="text-sm font-bold mt-2">Node JS</p></i>
    </div>
    <p class="mt-10">Even though ITF is a prototype, it has some functional features.</p>

<h3 class="text-xl font-bold mb-1">Workable Features:</h3>
<ul class="listing">
    <li class="list-disc list-inside pl-10">Directory</li>
    <li class="list-disc list-inside pl-10">Inspire section (Imposter Syndrome, Mantras)</li>
    <li class="list-disc list-inside pl-10">Login/Register (due to being a prototype only login is available)</li>
    <li class="list-disc list-inside pl-10">Profile Creation</li>
</ul>
<h3 class="text-xl font-bold  mb-1">Future Plans:</h3>

<ul class="listing">
    <li class="list-disc list-inside pl-10">Functional groups: Groups where people can have events/meetups and discussions</li>
    <li class="list-disc list-inside pl-10">Dynamic Directory: About to search by category</li>
    <li class="list-disc list-inside pl-10">Video Section: More inspirational videos based on category</li>
    <li class="list-disc list-inside pl-10">Email Notifications</li>
    <li class="list-disc list-inside pl-10">Search Functionality</li>
</ul>
</section>

<section class="ml-5 mr-5 grid grid-cols-4 mb-20">
<div>
<img src="{{asset('/images/paulabannerman.jpg')}}" class="w-72 rounded-full mr-20">
</div>
<div class="col-span-3 aboutMe">
<h2 class="text-3xl font-bold">Creator</h2>
<h3 class="text-2xl font-light">Paula Bannerman</h3>
<h3 class="text-sm font-light mb-3">@dcartist</h3>


<p class="pb-3">
Born and raised in the Washington DC metro area, Paula Bannerman is an artist and software engineer with almost 30 years of programming experience. She works as an art advocate for STEM/STEAM, developer, and software engineering instructional associate.
</p>

<i class="fas fa-globe"> <span>Portfolio</span></i>
<h3 class="mb-3 text-sm"><a href="https://www.dcartist.studio" target="_blank" class="text-sm text-blue-700">dcartist.studio</a></h3>
<i class="fas fa-envelope"> <span>Email</span></i>
<h3 class="text-sm mb-2 "><a href="mailto:pbannerman13@gmail.com" target="_blank" class="text-sm text-blue-700">Pbannerman13@gmail.com</a></h3>
<i class="fab fa-github"> <span>Github</span></i>
<h3 class="mb-2"><a href="https://github.com/dcartist" target="_blank" class="text-sm text-blue-700">github.com/dcartist</a></h3>
<i class="fab fa-linkedin-in"> <span>LinkedIn</span></i>
<h3 class="mb-2"><a href="https://www.linkedin.com/in/dcartist" target="_blank" class="text-sm text-blue-700">linkedin.com/in/dcartist</a></h3>
<i class="fab fa-twitter"> <span>Twitter</span></i>
<h3 class="mb-2"><a href="https://www.twitter.com/dcartist" target="_blank" class="text-sm text-blue-700">twitter.com/dcartist</a></h3>
<i class="fab fa-instagram"> <span>Instagram</span></i>
<h3 class="mb-2"><a href="https://www.instagram.com/dcartist" target="_blank" class="text-sm text-blue-700">@dcartist</a></h3>


</div>

</section>
</div>
</section>
@endsection
