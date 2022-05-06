<div class="rounded max-w-sm w-72 overflow-hidden shadow-lg my-3 mx-2">
  <div class="px-6 py-4">
      <a href="{{route('posts.show', $post)}}">
        <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
      </a>
      <div class="font-bold text-gray-600 text-xs mb-2">{{ $post->created_at->toDateString() }} | {{$post->user->name}}</div>
      <p class="text-gray-700 text-base">
          {{ Str::limit($post->content, 50, $end='...') }}
      </p>
  </div>
</div>