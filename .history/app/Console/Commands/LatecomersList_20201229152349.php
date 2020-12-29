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
        //$list = PDF::loadView('myPDF', compact('borrowings','users'));
        //$pdf = $list->download();
       // $pdf = PDF::loadView('myPDF', compact('borrowings','users'))->setPaper('a4');
        
        /*$data = [
            'details' => 'This email is to notify you of this week sales and challenges we are facing as Sales department',
            
        ];
        
        
        \Mail::to('hajarserrad@gmail.com')->send(new ListLC($pdf));*/
        //return $pdf->download('Latecomers.pdf');  

        $data["email"]='useremail@gmail.com';
            $data["client_name"]='user_name';
            $data["subject"]='sending pdf as attachment';

            //Generating PDF with all the post details

            $pdf = PDF::loadView('myPDF', compact('borrowings','users'))->setPaper('a4');  // this view file will be converted to PDF

            //Sending Mail to the corresponding user

            Mail::send([], $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attachData($pdf->output(), 'Your_Post_Detail.pdf', [
                       'mime' => 'application/pdf',
                   ])
            ->setBody('Hi, welcome user! this is the body of the mail');
            });




         return $this->info('PDF file has been generated successfully');
         
    }
}
