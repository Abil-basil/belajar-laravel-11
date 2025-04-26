<div class="navbar">
    <h3>navbar</h3>
    <ul class="nav">
        <x-nav-link href="/" style="{{ request()->is('/') ? 'background-color: #fff;' : '' }}">Home</x-nav-link>
        <x-nav-link href="/posts" style="{{ request()->is('posts') ? 'background-color: #fff;' : '' }}">Blog</x-nav-link>
        <x-nav-link href="/about" style="{{ request()->is('about') ? 'background-color: #fff;' : '' }}">About</x-nav-link>
        <x-nav-link href="/contact" style="{{ request()->is('contact') ? 'background-color: #fff;' : '' }}">Contact</x-nav-link>
    </ul>
</div>