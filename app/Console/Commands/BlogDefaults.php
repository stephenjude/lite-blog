<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Wink\WinkAuthor;
use Wink\WinkPage;
use Wink\WinkPost;

class BlogDefaults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:defaults';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add default database entries  like first blog post and about me';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->createBlogFirstPost();
        $this->comment('First blog post created');

        $this->createAboutPage();
        $this->comment('About page created');

        return 0;
    }

    private function createBlogFirstPost()
    {
        $title = 'Getting Started with Laravel Lite Blog';

        $slug = Str::slug($title);

        $body = 'Lite Blog a minimal full fledged blog generator (frontend & backend)  built with tailwindcss and wink a laravel publishing platform by Mohamed Said.
        The frontend is a replicate of jigsaw blog template. I made a blog post on how to get started. <a href="http://stephenjude.me/articles/lite-blog-a-laravel-blog-generator">Here is the link :)</a>';

        if (WinkPost::whereSlug($slug)->first()) {
            return;
        }

        WinkPost::create([
            'id' => Str::uuid(),
            'title' => $title,
            'excerpt' => $body,
            'slug' => $slug,
            'body' => $body,
            'published' => true,
            'author_id' => WinkAuthor::first()->id,
            'featured_image' => 'https://ucarecdn.com/a571a7d3-c4d5-400d-8805-c1b6e2e5afc0/homepage.PNG',
            'featured_image_caption' => '',
            'publish_date' => now(),
        ]);
    }

    private function createAboutPage()
    {
        $title = 'About Me';

        $slug = Str::slug($title);

        if (WinkPage::whereSlug($slug)->first()) {
            return;
        }

        WinkPage::create([
            'id' => Str::uuid(),
            'title' => $title,
            'slug' => $slug,
            'body' => 'Hey, I\'m Stephen Jude. I code. I write about code. I teach how I write code. I talk at conferences about how I teach to code.',
        ]);
    }
}
