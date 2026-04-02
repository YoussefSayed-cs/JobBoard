<x-layout :title="$title ?? 'Posts'">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/posts/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Create Post
        </a>
    </div>

    <br>

    @foreach($posts as $post)
    <div class="post border border-gray-300 p-4 mb-5 rounded-lg shadow-sm">

        <div>
            <h2 class="text-xl font-semibold text-gray-800">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            
            <p class="text-gray-600">{{ $post->author }}</p>
        </div>

        <div>
            <a href="/posts/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>

            <form action="/posts/{{ $post->id }}" method="POST" class="inline" 
            onsubmit="return confirm('Are you sure , this cannot be reversed?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
            </form>
        </div>

        <hr class="my-4">
        <h3 class="text-blue-600 font-medium mb-2">Comments for this post:</h3>

        @forelse($post->comments as $comment)
        <div class="comment ml-8 bg-gray-50 p-3 mb-2 rounded border-l-4 border-blue-400">
            <h4 class="font-bold text-sm text-gray-700">{{ $comment->title }}</h4>
            <p class="text-sm text-gray-600">{{ $comment->body }}</p>
        </div>
        @empty
        <p class="text-gray-400 italic ml-8 text-sm">No comments yet.</p>
        @endforelse
    </div>
    @endforeach

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layout>