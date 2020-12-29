<?php

namespace App\Console\Commands;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\User;
use App\Borrowing;
use App\Mail\ReminderEmail;

class Latecomer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'latecomer:reminder';

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
        $borrowings = Borrowing::where('must_be_returned_at','<',Carbon::now('Africa/Casablanca')->addDays(1))->get();
        foreach($borrowings as $borrowing)
        {
            $user = User::where('id','=',$borrowing->user_id)->distinct()->first();

            \Mail::to($user->email)->send(new ReminderEmail($user));    
        }
        $this->info('Reminder emails are sent successfuly');

        return 0;
    }
}
