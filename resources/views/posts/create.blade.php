    <x-layout :title="$title ?? 'Create Post'">

        <form method="post" action="/posts" class="mx-auto max-w-2xl py-10 px-4 sm:px-6 lg:px-8 color:-gray-900">
            @csrf
            
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Create New Post</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Use this form to add a new post to your blog.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                            <div class="mt-2">
                                <input id="title" type="text" value="{{ old('title') }}" name="title" autocomplete="given-name"

                                    class="{{ $errors->has('title') ? 'outline-red-600' : 'outline-gray-300' }} 
                                          block w-full rounded-md bg-white px-3 py-1.5 text-base
                                          text-gray-900 outline-1 -outline-offset-1 
                                          placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2
                                          focus:outline-indigo-600 sm:text-sm/6" />
                            </div>
                            @error('title')
                            <span class="mt-2 text-sm/6 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="author" class="block text-sm/6 font-medium text-gray-900">Author</label>
                            <div class="mt-2">

                                <input id="author" type="text" value="{{ old('author') }}" name="author" autocomplete="family-name"
                                    class="{{ $errors->has('author') ? 'outline-red-600' : 'outline-gray-300' }} 
                                block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1
                               -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2
                                focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

                            </div>
                            @error('author')
                            <span class="mt-2 text-sm/6 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                            <div class="mt-2">
                                <textarea
                                    id="body"
                                    name="body"
                                    rows="3"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 {{ $errors->has('body') ? 'outline-red-600' : 'outline-gray-300' }}">{{ old('body') }}</textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about the article.</p>
                            @error('body')
                            <span class="mt-2 text-sm/6 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/posts" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

        </form>

    </x-layout>