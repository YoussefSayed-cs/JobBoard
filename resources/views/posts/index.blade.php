<x-layout :title="$title ?? 'Posts'">

    <h1 class="text-2xl font-bold mb-4">Posts</h1>

    @foreach($posts as $post)
        <div class="post" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            
            <hr>
            <h3 style="color: blue;">Comments for this post:</h3>
            
            {{-- هنا بنلف على كومنتات البوست الحالي فقط --}}
            @foreach($post->comments as $comment)
                <div class="comment" style="margin-left: 30px; background: #f9f9f9; padding: 5px;">
                    <h4>{{ $comment->title }}</h4>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
    @endforeach

    {{-- روابط الصفحات تكون بره الـ Loop --}}
    {{ $posts->links() }}
    
</x-layout>