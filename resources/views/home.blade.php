@extends('layouts.app')

@section('title')
    Laravel 12
@endsection

@section('content')
    <section class="w-full bg-cover bg-center bg-no-repeat bg-[url('{{ asset('img/main-home.png') }}')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-16 lg:py-24">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Share your projects, and learning journey</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">This is a space where I explore web development, Laravel, technology, and personal reflections as I learn and build.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ route('posts.index')}}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Start reading
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    About me
                </a>  
            </div>
        </div>
    </section>
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
        <div class="flex justify-center">
            <a href="{{ route('posts.index') }}"
                class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
                 Explore all blog posts
            </a>
        </div>
    </section>
@endsection