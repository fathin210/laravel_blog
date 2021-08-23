<x-app-layout title="Home Page">
    <div class="container">
        @if (session()->has("success"))
        <div class="session alert alert-success" on>
            {{ session()->get('success'); }}
        </div> 
        @endif
        <h1>Home</h1>
    </div>
</x-app-layout>
