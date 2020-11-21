<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LiteBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run blog installation commands';

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
     * @return mixed
     */
    public function handle()
    {
        $wink_options = [
            '--tag' => 'wink-assets',
            '--force' => 1
        ];

        $this->call('storage:link');
        $this->call('vendor:publish', $wink_options);
        $this->call('wink:migrate');
        $this->call('blog:defaults');

        return 0;
    }
}
