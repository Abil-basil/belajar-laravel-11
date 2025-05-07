<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="article">
        <a href="/posts/{{ $post['slug'] }}">
            <h4>{{ $post['title'] }}</h4>
        </a>
        <div>
            by <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }} </a> In 
            <a href="/categories/{{ $post->category->slug }}">{{  $post->category->name  }}</a> {{ $post->created_at->diffForHumans() }}
        </div>
        {{-- str::limit = untuk membatasi char yang mucul --}}
        <p>{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}">halaman selanjutnya &raquo;</a>
    </article>
    @endforeach
</x-layout>