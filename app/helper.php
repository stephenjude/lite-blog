<?php

function post_url($slug)
{
    return route('blog.post', $slug);
}

function format_date($date)
{
    return  \Carbon\Carbon::parse($date)->format('F j, Y');
}

function read_time($content)
{
    // count words
    $words = str_word_count(strip_tags($content));

    // Divide by the average number of words per minute
    $minutes = ceil($words / 250);

    return sprintf('%d %s %s', $minutes, Str::plural('min', $minutes), 'read');
}
