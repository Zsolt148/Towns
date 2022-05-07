<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <div class="rounded shadow-lg mx-auto bg-white max-w-7xl mt-8">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="px-10 font-semibold text-3xl text-gray-800 leading-tight">
                {{$post->title}}
            </h2>

            <p class="px-10 text-xs">Szerző: {{$post->user->name}}</p>
            <p class="px-10 border-b-2 text-xs">Létrehozva: {{$post->created_at->format('Y.m.d')}} - {{ $post->created_at->diffForHumans() }}</p>

            <div class="p-10">
                {{$post->content}}
            </div>
        </div>
    </div>
</x-app-layout>
