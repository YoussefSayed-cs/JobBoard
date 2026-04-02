<x-layout :title="$posts->title">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-sm border border-gray-100 rounded-lg">

        {{-- عنوان المقال --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-2">
            {{ $posts->title }}
        </h1>

        {{-- كاتب المقال --}}
        <div class="text-sm text-gray-500 mb-4">
            By: <span class="font-medium text-gray-700">{{ $posts->author }}</span>
        </div>

        {{-- محتوى المقال --}}
        <div class="text-gray-700 leading-relaxed text-lg mb-6">
            {{ $posts->body }}
        </div>

        <hr class="border-gray-200 mb-4">

        {{-- عدد التعليقات --}}
        <div class="flex items-center text-gray-500 text-sm mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span class="font-medium mr-1">{{ $posts->comments->count() }}</span>
            <span>تعليقات</span>
        </div>

        <hr class="border-gray-200 mb-6">

        {{-- قسم الكومنتات --}}
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Comments</h3>

        {{-- رسالة نجاح الإضافة --}}
        @if(session('success'))
        <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm">
            {{ session('success') }}
        </div>
        @endif

        {{-- فورم إضافة كومنت جديد (بتصميم Tailwind) --}}
        <form action="/comments" method="POST" class="mb-6 bg-gray-50 p-4 rounded-lg border border-gray-100">
            @csrf
            <input type="hidden" name="post_id" value="{{ $posts->id }}">


            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Name:</label>
                <input type="text" id="author" name="author" value="{{ old('author') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm"
                    placeholder="Enter your name here:" required>
                @error('author')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Comment:</label>
                <textarea id="content" name="content" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm"
                    placeholder="Enter your comment here:" required>{{ old('content') }}</textarea>
                @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition text-sm">
                Add Comment
            </button>

        </form>

        {{-- الرجوع للمقالات --}}
        <div class="mt-6 border-t pt-4">
            <a href="/posts" class="text-indigo-600 hover:text-indigo-900 font-medium text-sm flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                return to posts
            </a>
        </div>
    </div>
</x-layout>