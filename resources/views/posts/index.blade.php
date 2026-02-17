<x-layout :title="$title ?? 'Posts'">

    <h1 class="text-2xl font-bold mb-4">Posts</h1>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <br>
            <hr>
            <br>

        </div>

    @endforeach


    @foreach($post->comments as $comment)
        <div class="post">
            <h2>{{ $comment->title }}</h2>
            <p>{{ $comment->body }}</p>
            <br>
            <hr>
            <br>
        </div>
    @endforeach


 {{ $posts->links()  }}     
</x-layout>