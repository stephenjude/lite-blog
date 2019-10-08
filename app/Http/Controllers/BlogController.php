<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{

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

    public function updateJsonScript()
    {
        $data = collect(WinkPost::live()
            ->orderBy('publish_date', 'DESC')
            ->get())->map(function ($item, $key) {
            return [
                "title" => $item->title,
                "link" => post_url($item->slug),
                "snippet" => $item->summary
            ];
        });

        $file_path = public_path('index.json');

        file_put_contents($file_path, $data->toJson());

        return "Indexed Json Script updated for live search";
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


    public function about()
    {
        return view('about');
    }
}
