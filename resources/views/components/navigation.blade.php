<style>
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
    <!-- An unexamined life is not worth living. - Socrates -->
    <ul class="flex items-center">
    <li class="p-3"><a href="{{ route('home')}}"><span class="text-xl font-bold">INSPIRED TECH LIFE</span></a></li>
    <li><a href="{{ route('about')}}" class="p-3">About</a></li>
    <li><a href="" class="p-3">Support Groups</a></li>
    <li><a href="" class="p-3">Tech Mantras</a></li>
    <li><a href="{{ route('directory')}}" class="p-3">Directory</a></li>
    <li><a href="" class="p-3">Blog</a></li>
    <li><a href="" class="p-3">Contact</a></li>
    <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
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
            @endif -->
    </ul>
</nav>
