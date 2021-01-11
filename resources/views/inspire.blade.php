@extends('base')
@section('content')
<div class="flex justify-center content-end" id="aboutBackgroundHeader" style="background-image: url({{asset('/images/poly.svg')}});" >

<h1 class="bg-black min-w-full self-end h-11 text-3xl pl-5 text-white">Guidance</h1>
</div>
<div>
<div class="pt-1"><x-alert/></div>
<h1 class="text-6xl text-center font-extralight pt-4 mb-10"> Don't suffer in silence!
</h1>
<section class="ml-10 mr-10 -mb-10">
<p class="p-2">This section is for those looking for guidance. This section includes hotlines, information about imposter syndrome, and other issues that come with being in the tech world. Future plans for Inspired Tech Life include mantras, mentorship, and pep talks.</p>
<h3 class="text-5xl mb-3">Crisis Mode?</h3>
<p class="p-2">Please use the resources below:</p>
<ul class="p-2 inspireList ">
    <li><span class="font-bold">Suicide Prevention Lifeline</span> 1-800-273-8255 <a href="https://suicidepreventionlifeline.org/talk-to-someone-now/" target="_blank">suicidepreventionlifeline.org <i class="fas fa-external-link-alt"></i> </a></li>
    <li><span class="font-bold">The Trevor Project</span> 1-866-488-7386 <a href="https://www.thetrevorproject.org" target="_blank">thetrevorproject.org <i class="fas fa-external-link-alt"></i> </a></li>
    <li><span class="font-bold">Now Matters Now </span><a href="https://www.nowmattersnow.org/help-line" target="_blank">nowmattersnow.org/help-line <i class="fas fa-external-link-alt"></i></a></li>
    <li><span class="font-bold">IMAlive</span> <a href="https://www.imalive.org" target="_blank"> www.imalive.org <i class="fas fa-external-link-alt"></i></a></li>
</ul>
</section>

<!--
<section class="flex inspireSection">
    <a href="{{route('imposter')}}" class="shadow-2xl m-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"><div>Imposter Syndrome</div></a>
    <a href="{{route('mantra')}}" class="shadow-2xl m-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"><div>Mantras</div></a>
</section> -->
@include('imposter')
</div>
@endsection
