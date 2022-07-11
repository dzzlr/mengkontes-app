<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #141D2B">
    <div class="container">
        <livewire:application-brand/>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('competitions*')) ? 'active' : '' }}" href="{{ route('competitions.index') }}">{{ __('Competitions') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Webinars') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Blogs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('news*')) ? 'active' : '' }}" href="{{ route('news.index') }}">{{ __('News') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('About Us') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span><i class="bi bi-person-fill"></i></span>&nbsp;{{ Auth::user()->name }}
                        </a>
                        <livewire:navbar-dropdown/>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll',(e) => {
        const nav = document.querySelector('.navbar');
        if (window.pageYOffset > 0) {
            nav.classList.add("shadow");
        } else {
            nav.classList.remove("shadow");
        }
    });
</script>