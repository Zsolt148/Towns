<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          @auth
              Üdvözöljük az oldalon {{ auth()->user()->name }}!
          @else
              Üdvözöljük az oldalon!
          @endauth
      </h2>
  </x-slot>
</x-app-layout>
