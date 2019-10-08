<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{


    /**
     * Show blog homepage.
     *
     * @return View
     */
    public function index()
    {
        $data = [
            'posts'  => WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->simplePaginate(12)
        ];

        return view('index', compact('data'));
    }


    /**
     * Show about blog.
     *
     * @return View
     */
    public function about()
    {
        return view('about');
    }


    /**
     * Show a post given a slug.
     *
     * @param string $slug
     * @return View
     */
    public function findPostBySlug(string $slug)
    {
        $posts = WinkPost::with('tags')
            ->live()->get();

        $post = $posts->firstWhere('slug', $slug);

        if (optional($post)->published) {
            $next = $posts->sortBy('published_at')->firstWhere('published_at', '>', optional($post)->published_at);
            $prev = $posts->sortBy('published_at')->firstWhere('published_at', '<', optional($post)->published_at);

            $data = [
                'author' => $post->author,
                'post'   => $post,
                'meta'   => $post->meta,
                'next'   => $next,
                'prev'   => $prev,
            ];

            return view('post', compact('data'));
        }

        abort(404);
    }



    /**
     * Update indexed articles.
     *
     * @return string
     */
    public function updateIndexedArticles()
    {
        $data = collect(WinkPost::live()
            ->orderBy('publish_date', 'DESC')
            ->get())->map(function ($item, $key) {
            return [
                "title" => $item->title,
                "link" => post_url($item->slug),
                "snippet" => $item->excerpt
            ];
        });

        $file_path = public_path('index.json');

        file_put_contents($file_path, $data->toJson());

        return "Indexed articles updated for live search";
    }
}
