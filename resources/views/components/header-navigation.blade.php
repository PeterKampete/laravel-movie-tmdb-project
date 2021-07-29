<div class="navbar">
    <a href="{{route('Logout')}}">Logout</a>
    <a href=" {{route('RegisterPage')}}">Register</a>
    <a href=" {{route('LoginPage')}}">Login</a>
    <div class="dropdown">
        <button class="dropbtn">CATEGORIES
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="{{route('latestmovies')}}">Latest Movies</a>
            <a href="{{route('popularmovies')}}">Popular Movies</a>
            <a href="{{route('upcomingmovies')}}">UpComing Movies</a>
        </div>
    </div>
</div>