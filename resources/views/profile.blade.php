<x-app-layout title="{{ $username ?? 'Profile' }}">
    {{-- yang atas bisa juga kayak gini <x-app-layout :title={{ $name ?? 'Profile' }}> --}}
    <h1>{{ $username ?? "Profile" }}</h1>
</x-app-layout>
