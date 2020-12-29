<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDF;
use App\User;
use App\Borrowing;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

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
    protected $description = 'This command download a pdf file including a list of latecomers';

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
        $borrowings = Borrowing::where('must_be_returned_at','<',Carbon::now('Africa/Casablanca'))->get();
        $users = User::all();

            $data["email"]='maktabati@gmail.com';
            
            $data["subject"]='The daily list of latecomers';

            

            $pdf = PDF::loadView('myPDF', compact('borrowings','users'))->setPaper('a4');  // this view file will be converted to PDF


            Mail::send([], $data, function($message)use($data,$pdf) {
            $message->to($data["email"])
                    ->subject($data["subject"])
                    ->attachData($pdf->output(), 'Latecomers.pdf', [
                                 'mime' => 'application/pdf',
                                ])
                    ->setBody('Hi, This is the daily list of latecomers');
            });




         return $this->info('PDF file has been generated successfully');
         
    }
}
