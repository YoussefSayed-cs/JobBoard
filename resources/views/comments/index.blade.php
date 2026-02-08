<x-layout :title="$title">


<div>
    <h1>{{ $title }}</h1>
</div>


@foreach($comments as $comment)
    <div class="comment">
        <h2>{{ $comment->post->title }}</h2>
        <h3>{{ $comment->author }}</h3>
        <p>{{ $comment->content }}</p>
        <br>
        <hr>
        <br>

    </div>
@endforeach


</x-layout>