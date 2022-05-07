<div class="rounded overflow-hidden shadow-lg my-3 mx-2 bg-white">
  <div class="px-6 py-4">
      <a href="{{route('posts.show', $post)}}">
        <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
      </a>
      <div class="font-bold text-gray-600 text-xs mb-2">{{$post->created_at->format('Y.m.d')}} - {{ $post->created_at->diffForHumans() }} | {{$post->user->name}}</div>
      <p class="text-gray-700 text-base">
          {{ Str::limit($post->content, 50, '...') }}
      </p>
      <div class="mt-2">
          <a href="{{route('posts.show', $post)}}" class="text-blue-500">
              Continue
          </a>
      </div>
  </div>
</div>
