<div class="flex flex-col mb-4">
    <h2 class="text-3xl mt-0">
        <a href="{{ post_url($post->slug) }}" title="Read more - {{ $post->title }}" class="text-gray-900 font-extrabold">{{ $post->title }}</a>
    </h2>

    {!! $post->excerpt ? '<p class="text-xl mb-4 mt-0">'. $post->excerpt.'</p>':'' !!}

    <p class="text-gray-700 text-base md:mt-0">Published {{ format_date($post->published_at) }} • 
    <a href="{{ post_url($post->slug) }}" class="uppercase font-semibold text-xs tracking-wide mb-2"> {{ read_time($post->body) }}</a></p>
</div>