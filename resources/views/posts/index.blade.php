@extends('layouts.app')

@section('title')
    Laravel 12 - Posts
@endsection

@section('content')
    <section class="max-w-screen-xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
            </svg>
            Recent posts
        </h2>
    </section>
    <section class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
        @foreach ($posts as $post)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-5">
                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ $post->title }}</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </section>
    <section class="max-w-screen-xl mx-auto px-6 py-12">
        {{ $posts->links() }}
    </section>

@endsection