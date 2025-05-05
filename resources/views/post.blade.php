<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="article">
            <h4>{{ $post['title'] }}</h4>
        <div>
            <a href="#">{{ $post['author'] }} </a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p>{{$post['body'] }}</p>
        <a href="/posts">&laquo; kembali ke halaman awal</a>
    </article>
</x-layout>