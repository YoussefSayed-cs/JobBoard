<x-layout :title="$title ?? 'Posts'">

<h1>Posts</h1>

@foreach($posts as $post)
    <div class="post">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
@endforeach
    

</x-layout>