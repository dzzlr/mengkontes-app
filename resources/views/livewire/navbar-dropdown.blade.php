<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('home') }}">
        <span><i class="bi bi-grid"></i></span>&nbsp;{{ __('Dashboard') }}</a>
    <a class="dropdown-item" href="">
        <span><i class="bi bi-person"></i></span>&nbsp;{{ __('Profile') }}</a>
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span><i class="bi bi-box-arrow-in-right"></i></span>
        &nbsp;{{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>