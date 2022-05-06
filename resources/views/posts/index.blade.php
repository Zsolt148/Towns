<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Összes poszt
        </h2>
    </x-slot>
    <div class="overflow-hidden p-10 max-w-7xl mx-auto flex flex-wrap justify-center">
      @foreach ($posts as $post)
        <x-post-layout :post=$post />
      @endforeach
    </div>
</x-app-layout>
