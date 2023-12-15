<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8ae80ab0e.js" crossorigin="anonymous"></script>
    <title>RedForum</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-danger">
            
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="{{ route('forum.index')}}">Homepage</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-white{{ request()->routeIs('forum.index') ? 'active text-white-50 ' : '' }}"
                            href="{{ route('forum.index') }}">Forum</a>
                        <a class="nav-link text-white{{ request()->routeIs('dashboard') ? 'active text-white-50 ' : '' }}"
                            href="{{ route('dashboard') }}">Laravel-Dashboard</a>

                    </div>
                </div>
            </div>

            @if (auth()->check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fa-solid fa-right-from-bracket text-white text-end me-3 fs-3"></i>
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}"><i
                        class="fa-solid fa-right-to-bracket text-white text-end me-3 fs-3"></i></a>
            @endif

        </nav>
    </header>
    @yield('content')
</body>

</html>
