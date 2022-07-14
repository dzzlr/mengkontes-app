<div class="mb-3" style="background-color: #141D2B; padding-top: 4rem;">
    <div class="container">
        <div class="d-flex flex-row">
            <x-navigation-link title="All" url="all" href="{{ route('competitions.index') }}" />
            <x-navigation-link title="Capture The Flag" url="capture-the-flag" href="{{ route('competitions.ctf') }}" />
            <x-navigation-link title="Competitive Programming" url="competitive-programming" href="{{ route('competitions.cp') }}" />
            <x-navigation-link title="Data Mining" url="data-mining" href="{{ route('competitions.dm') }}" />
        </div>
    </div>
</div>