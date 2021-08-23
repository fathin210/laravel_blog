<x-app-layout title="Home Page">
    <div class="container">
        @if (session()->has("registered"))
        <div class="session alert alert-success" on>
            {{ session()->get('registered'); }}
        </div> 
        @endif
        <h1>Home</h1>
    </div>
</x-app-layout>
