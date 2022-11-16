<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Queue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '运行队列';

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
        return 0;
    }
}
