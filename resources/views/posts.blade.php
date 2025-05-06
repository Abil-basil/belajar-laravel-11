<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="article">
        <a href="/posts/{{ $post['slug'] }}">
            <h4>{{ $post['title'] }}</h4>
        </a>
        <div>
            <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }} </a> | {{ $post->created_at->diffForHumans() }}
        </div>
        {{-- str::limit = untuk membatasi char yang mucul --}}
        <p>{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}">halaman selanjutnya &raquo;</a>
    </article>
    @endforeach
</x-layout>