<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use 

class LatecomersList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'latecomers:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download a pdf file including a list of the latecomers';

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
        URL::to('generate-pdf');
        $this->info('PDF file has been generated successfully');
        return 0;
    }
}
