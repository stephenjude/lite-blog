@php
$page = (object) [
            'baseUrl' => '',
            'production' => false,
            'siteName' => 'Stephen Jude',
            'mantra' => 'I build for the next billion users',
            'siteDescription' => 'Web & Mobile Developer ',
            'description' => 'page not found',
            'siteAuthor' => 'Stephen Jude',
            'title' => '404'
        ];
@endphp

@extends('layouts.master')

@section('body')
    <div class="flex flex-col items-center text-gray-700 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Didn't find what you are looking for? See more <a href="{{route('articles')}}">Articles</a>.
        </p>
    </div>
@endsection
