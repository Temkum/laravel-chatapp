@props(['post' => $post])

<div>
  <div class="mb-4">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-3">{{ $post->body }}</p>

    {{-- like btns --}}
    <div class="flex items-center">
      @auth
        {{-- prevent user from liking twice --}}
        @if (!$post->likedBy(auth()->user()))
          <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-2">
            @csrf
            <button type="submit" class="text-blue-500">Like</button>
          </form>
        @else
          <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Unlike</button>
          </form>
        @endif
      @endauth

      {{-- likes section --}}
      <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>

    {{-- delete post --}}
    @can('delete', $post)
      <form action="{{ route('posts.destroy', $post) }}" method="post" class="mr-1">
        @csrf
        @method('DELETE') {{-- method spoofing --}}
        <button type="submit" class="text-red-500">Delete</button>
      </form>
    @endcan
  </div>
</div>
