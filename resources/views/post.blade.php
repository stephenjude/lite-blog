@extends('layouts.master')


@php
$post = $data['post'];

@endphp

@push('meta')
<meta name="keywords" content="{{  $post['tags'] ?? implode(',', $post['tags']) }}">
<meta name="description" content="{{ $data['meta']['meta_description'] }}">
<meta property="og:type" content="article">
<meta name="og:title" content="{{ $data['meta']['opengraph_title'] }}">
<meta name="og:description" content="{{ $data['meta']['opengraph_description'] }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $data['meta']['opengraph_title'] }}">
<meta name="twitter:description" content="{{ $data['meta']['opengraph_description'] }}">

@isset($data['post']->featured_image)
<meta name="og:image" content="{{ url($data['post']->featured_image) }}">
<meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
@endisset
@endpush


@section('body')
@if ($post->featured_image)
<img src="{{ $post->featured_image }}" alt="{{ $post->title }} cover image" class="mb-2">
@endif

<h1 class="leading-none mb-2">{{ $post->title }}</h1>

<p class="text-gray-700 text-xm md:mt-0">
    Published {{ format_date($post->published_at) }} •
    <a class="uppercase text-gray-700 text-base md:mt-0">
        {{ read_time($data['post']->body) }}
    </a>
</p>


<div class="border-b border-blue-200 mb-10 pb-4" v-pre>
    {!! $post->body !!}
</div>

<nav class="flex justify-between text-sm md:text-base">
    <div>
        @if ($next = $data['next'])
        <a href="{{post_url($next->slug) }}" title="Older Post: {{ $next->title }}">
            &LeftArrow; {{ $next->title }}
        </a>
        @endif
    </div>

    <div>
        @if ($previous = $data['prev'])
        <a href="{{ post_url($previous->slug) }}" title="Newer Post: {{ $previous->title }}">
            {{ $previous->title }} &RightArrow;
        </a>
        @endif
    </div>
</nav>
@endsection

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection