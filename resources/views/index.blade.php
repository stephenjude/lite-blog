@extends('layouts.master')

@push('meta')
<meta property="og:title" content="{{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="{{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')
<h1>Recent Articles</h1>

<hr class="border-b my-6">

@foreach ($data['posts'] as $post)
@include('components.post-preview-inline')

@if ($post != $data['posts']->last())
<hr class="border-b my-6">
@endif
@endforeach


@if ($data['posts']->count())
<nav class="flex text-base my-8">
    @if ($previous = $data['posts']->previousPageUrl())
    <a href="{{ $previous }}" title="Previous Page" class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3">&LeftArrow;</a>
    @endif


    @if ($next = $data['posts']->nextPageUrl())
    <a href="{{ $next }}" title="Next Page" class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3">&RightArrow;</a>
    @endif
</nav>
@endif
@stop

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection