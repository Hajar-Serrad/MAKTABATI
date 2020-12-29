<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class Latecomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:latecomer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command send an email to the members who the deadline of borrowing books will end soon'; 
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
