<x-app-layout>
  <div class="container mx-auto " >
    <h2 class="px-10 font-semibold text-3xl text-gray-800 leading-tight">
        {{$post->title}}
    </h2>
    <p class="px-10 text-xs " >Szerző: {{$post->user->name}}</p>
    <p class="px-10 border-b-2 text-xs" >Létrehozva: {{$post->created_at->toDateString()}}</p>
    
    <div class="p-10 max-w-5xl mx-auto">
      {{$post->content}}
    </div>
  </div>
</x-app-layout>