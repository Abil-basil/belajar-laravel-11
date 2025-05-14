<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="/posts" method="GET">
        @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <input type="search" name="search" placeholder="Cari Posts" autocomplete="off">
        <button type="submit" name="submit">Cari</button>
    </form>

    @forelse ($posts as $post)
    <article class="article">
        <a href="/posts/{{ $post['slug'] }}">
            <h4>{{ $post['title'] }}</h4>
        </a>
        <div>
            by <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }} </a> In 
            <a href="/posts?category={{ $post->category->slug }}">{{  $post->category->name  }}</a> {{ $post->created_at->diffForHumans() }}
        </div>
        {{-- str::limit = untuk membatasi char yang mucul --}}
        <p>{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}">halaman selanjutnya &raquo;</a>
    </article>
    @empty
        <p>artikel not found</p>
        <a href="/posts">&laquo; kembali</a>
    @endforelse
</x-layout>