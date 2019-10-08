@extends('layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description" content="A little bit about {{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')

<h1>About Me</h1>

<img src="{{ asset('/img/logo.svg')}}" alt="About image" class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

<p class="mb-6">Hello, I am John Doe</p>

<p class="mb-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
</p>
<p>
    Fugit iste culpa placeat dolorem modi, sit consectetur ex sapiente quae aut in debitis quod.
</p>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
</p>

<p class="mb-6">
    Error fugit incidunt nisi quidem omnis, enim consequatur distinctio alias esse eius soluta quasi ipsam nam laboriosam! Dignissimos alias minus fugit voluptatem.
</p>

@endsection

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    @include('components.newsletter-signup')
</section>
@endsection