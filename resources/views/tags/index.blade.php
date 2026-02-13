<x-layout :title="$title ?? 'Posts'">

    <h1 class="text-2xl font-bold mb-4">Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($tags as $tag)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-2">{{ $tag->title }}</h2>
                <p class="text-gray-600 mb-2">{{ $tag->description }}</p>
            </div>
        @endforeach

</x-layout>