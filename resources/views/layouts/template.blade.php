<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 

</head>
<body>
    <header> 

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li> <a href="{{ route('home') }}">Accueil</a></li>
        <li> <a href="{{ route('animals') }}">Liste des animaux</a></li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li> <a href="{{ route('home') }}">Accueil</a></li>
        <li> <a href="{{ route('animals') }}">Liste des animaux </a></li>
        <li> <a href="{{ route('createAnimal') }}"> Ajouter un animal</a></li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
    </header>

    <main> 
        @yield('content')
    </main>

    <footer>
        <p> Soline © qui tente des trucs </p>
    </footer>
</body>
</html>