<!-- <style>
       .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
</style>

<nav class="flex justify-between mb-3" >
    <ul class="flex items-center">
    <li class="p-3"><a href="{{ route('home')}}"><span class="text-xl font-bold">INSPIRED TECH LIFE</span></a></li>
    <li><a href="{{ route('about')}}" class="p-3">About</a></li>
    <li><a href="{{ route('supportgroups')}}" class="p-3">Support Groups</a></li>
    <li><a href="{{ route('mantra')}}" class="p-3">Mantras</a></li>
    <li><a href="{{ route('directory')}}" class="p-3">Directory</a></li>
    <li><a href="{{ route('blog')}}" class="p-3">Blog</a></li>
    <li><a href="{{ route('contact')}}" class="p-3">Contact</a></li>
   @if (Route::has('register'))
                <div class="top-right links">
                    @auth

                        <form action="{{route('logout')}}" method="post">
@csrf
<button type="submit"> Logout</button>
</form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </ul>
</nav>
 -->


 <nav class="navbar navbar-expand-xl navbar-light bg-light shadow-xl">
 <a href="{{ route('home')}}"><span class="text-xl font-bold navbar-brand">INSPIRED TECH LIFE</span></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="nav-item"><a href="{{ route('about')}}" class="nav-link p-3 ">About</a></li>
    <li class="nav-item"><a href="{{ route('supportgroups')}}" class="nav-link p-3 ">Support Groups</a></li>
    <li class="nav-item"><a href="{{ route('mantra')}}" class="nav-link p-3 ">Mantras</a></li>
    <li class="nav-item"><a href="{{ route('directory')}}" class="nav-link p-3 ">Directory</a></li>
    <li class="nav-item"><a href="{{ route('blog')}}" class="nav-link p-3 ">Blog</a></li>
    <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link p-3 ">Contact</a></li>

    </ul>

    @if (Route::has('register'))
                    @auth
                    <a href="{{ route('profile')}}"><span class="mr-2 font-light">{{auth()->user()->username}}</span></a>
                    <form action="{{route('logout')}}" method="post" >
@csrf
<button type="submit" class="font-semibold"> Logout</button>
</form>
                    @else
                        <a href="{{ route('login') }}" class="nav-link  border-2 border-black text-white bg-black" id="loginNav">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="border-black nav-link  border-2">Register</a>
                        @endif
                    @endauth
            @endif

  </div>
</nav>
