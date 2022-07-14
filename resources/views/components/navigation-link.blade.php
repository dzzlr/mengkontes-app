<a href="{{ $href }}" id="navlink" class="p-2 px-3 text-decoration-none  {{ (request()->is('competitions/'.$url)) ? 'border-bottom border-3' : '' }}">
    <span  class="{{ (request()->is('competitions/'.$url)) ? 'text-white' : 'text-white-50' }}">
        {{ $title }}
    </span>
</a>

<style>
    #navlink:hover {
        background-color: #162131;
    }
</style>