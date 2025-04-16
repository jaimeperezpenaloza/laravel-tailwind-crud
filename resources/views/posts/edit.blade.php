@extends('layouts.app')

@section('title')
    Laravel 12 - Edit
@endsection

@section('content')
    <section class="max-w-screen-xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
            </svg>
            Edit post
        </h2>
    </section>
    <section class="max-w-screen-xl mx-auto px-6">
        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf
            @method('PUT')
            <form class="max-w-sm mx-auto">
                @php
                    $InputClassError = 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500';
                    $LabelClassError = 'text-red-700 dark:text-red-500';

                    $inputClasses = 'bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
                    $labelClasses = 'text-gray-900 dark:text-white';

                    $inputErrorTitle = $errors->has('title');
                    if ($inputErrorTitle) {
                        $inputClassesTitle = $InputClassError;
                        $labelClassesTitle = $LabelClassError;
                    } else {
                        $inputClassesTitle = $inputClasses;
                        $labelClassesTitle = $labelClasses;
                    }
                    $inputErrorSlug = $errors->has('slug');
                    if ($inputErrorSlug) {
                        $inputClassesSlug = $InputClassError;
                        $labelClassesSlug = $LabelClassError;
                    } else {
                        $inputClassesSlug = $inputClasses;
                        $labelClassesSlug = $labelClasses;
                    }
                    $inputErrorCategory = $errors->has('category');
                    if ($inputErrorCategory) {
                        $inputClassesCategory = $InputClassError;
                        $labelClassesCategory = $LabelClassError;
                    } else {
                        $inputClassesCategory = $inputClasses;
                        $labelClassesCategory = $labelClasses;
                    }
                    $inputErrorContent = $errors->has('content');
                    if ($inputErrorContent) {
                        $inputClassesContent = $InputClassError;
                        $labelClassesContent = $LabelClassError;
                    } else {
                        $inputClassesContent = $inputClasses;
                        $labelClassesContent = $labelClasses;
                    }
                @endphp
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium {{ $labelClassesTitle }}">
                        Title
                    </label>

                    <input type="text" name="title" value="{{ old('title', $post->title) }}" class="block w-full p-2.5 text-sm rounded-lg {{ $inputClassesTitle }}">

                    @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium {{ $labelClassesSlug }}">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" class="text-sm rounded-lg block w-full p-2.5 {{ $inputClassesSlug}}">
                    
                    @error('slug')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> {{ $message }}
                        </p>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium {{ $labelClassesCategory }}">Category</label>
                    <input type="text" name="category" value="{{ old('category', $post->category) }}" class="btext-sm rounded-lg block w-full p-2.5 {{ $inputClassesCategory}}">

                    @error('category')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium {{ $labelClassesContent }}">Content</label>
                    <textarea name="content" class="btext-sm rounded-lg block w-full p-2.5 {{ $inputClassesContent}}">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            <span class="font-medium">Oops!</span> {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update Post</button>
              </form>
        </form>
    </section>
@endsection