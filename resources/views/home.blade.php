<x-layout>
    <x-slot:title>{{ $title }}</x-slot:tittle>
    <p>ini adalah halaman home</p>

    @foreach ($data as $d)
        <p>id : {{ $d['id'] }}</p>
        <p>name : {{ $d['name'] }}</p>
        <p>email : {{ $d['email'] }}</p>
        <p>verif email : {{ $d['email_verified_at'] }}</p>
        <p>password : {{ $d['password'] }}</p>
        <p>password : {{ $d['is_admin'] }}</p>
        @endforeach
</x-layout>