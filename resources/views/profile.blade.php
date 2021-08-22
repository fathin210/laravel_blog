<x-app-layout title="{{ $name ?? 'Profile' }}">
    {{-- yang atas bisa juga kayak gini <x-app-layout :title={{ $name ?? 'Profile' }}> --}}
    <h1>{{ $name ?? "Profile" }}</h1>
</x-app-layout>
