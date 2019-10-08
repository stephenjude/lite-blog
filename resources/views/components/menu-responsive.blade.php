<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $meta['title'] ?? config('services.meta.site_name') }} About"
                href="{{url('about')}}"
                class="nav-menu__item hover:text-blue-500 active text-blue }}"
            >About</a>
        </li>
    </ul>
</nav>
