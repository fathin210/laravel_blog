@extends("layouts.app", ['title' => "Home"])

@section("content")
    <x-alert>
        @slot("title")
        Header Component with <strong>Title</strong>
        @endslot
        Ini adalah children
    </x-alert>
     
    <h1>Home</h1>
    Lorem ipsum dolor sit <strong>amet</strong> consectetur adipisicing elit. Praesentium nulla alias, autem doloremque ullam, in eum similique accusamus magnam excepturi asperiores minima consectetur natus tenetur nobis! Exercitationem adipisci fugit autem?
@endsection