<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\OutputInterface;

class LiteBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run blog installation process';

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
    }
}
