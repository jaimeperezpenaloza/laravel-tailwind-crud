
@extends('layouts.app')

@section('title')
    Laravel 12 - Post 
@endsection

@section('content')
    <main class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8 p-4">
        
        <section class="lg:col-span-3">
            <article class="prose max-w-none dark:prose-invert">
                <h1 class="text-3xl font-bold mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                    </svg>
                    {{ $post->title }}
                </h1>
                <div class="mb-6 text-sm text-gray-500 dark:text-gray-400">
                    Created on {{ $post->created_at->format('F j, Y') }} · Category: {{ $post->category }}
                </div>
                <p class="text-justify">
                    {{ $post->content }}
                </p>
            </article>
        </section>

        <aside class="lg:col-span-1">
            <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded-lg shadow mb-6">
                <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-3">Manage post</h3>
                
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('posts.edit', $post) }}"
                       class="bg-blue-600 text-white text-sm font-medium py-2 rounded text-center hover:bg-blue-700 transition">
                        Edit
                    </a>
                    
                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-600 text-white text-sm font-medium py-2 rounded w-full hover:bg-red-700 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="sticky top-24 space-y-4">
                <h2 class="text-lg font-semibold">Tags</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-600 hover:underline">Laravel</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">PHP</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">Webdev</a></li>
                </ul>
            </div>
        </aside>

    </main>

@endsection