<?php

namespace App\Console\Commands;
use App\Mail\ListLC;
use Illuminate\Console\Command;
use PDF;
use App\User;
use App\Borrowing;

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
        //$list = PDF::loadView('myPDF', compact('borrowings','users'));
        //$pdf = $list->download();
        $pdf = PDF::loadView('myPDF', compact('borrowings','users'))->setPaper('a4');
        
        
        
        
        \Mail::to('hajar@gmail.com')->send(new List($pdf));
        //return $pdf->download('Latecomers.pdf');  
         return $this->info('PDF file has been generated successfully');
         
    }
}
