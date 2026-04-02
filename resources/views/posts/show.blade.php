<x-layout :title="$posts->title">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-sm border border-gray-100 rounded-lg">
        
        {{-- عنوان المقال --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
            {{ $posts->title }}
        </h1>
        
        {{-- محتوى المقال --}}
        <div class="text-gray-700 leading-relaxed text-lg mb-6">
            {{ $posts->body }}
        </div>
        
        <hr class="border-gray-200 mb-4">

        {{-- عدد التعليقات --}}
        <div class="flex items-center text-gray-500 text-sm">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span class="font-medium mr-1">{{ $posts->comments->count() }}</span> 
        </div>

        <a href="/posts" class="text-indigo-600 hover:text-indigo-900">return to posts</a>
    </div>
</x-layout>