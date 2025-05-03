<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="article">
            <h4>{{ $post['title'] }}</h4>
        <div>
            <a href="#">{{ $post['author'] }} </a> | 03 july 2007
        </div>
        <p>{{$post['body'], 100 }}</p>
        <a href="/posts">&laquo; kembali ke halaman awal</a>
    </article>
</x-layout>