<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDF;
use App\User;
use App\Borrowing;
use Illuminate\Support\Facades\Mail;
namespace App\Http\Controllers\Auth;
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
        $list = PDF::loadView('myPDF', compact('borrowings','users'));
        $pdf = $list->output();

        $data = [
            'details' => 'This email is to notify you of this week sales and challenges we are facing as Sales department',
            
        ];
        Mail::send('emails.borrow', $data, function ($message) use ($pdf) {
           $message->subject('HLAB Weekl Sales Report');
           $message->from('maktabati@gmail.com');
           $message->to(Auth::guard('admin')->user()->email);
           $message->attachData($pdf, 'sales.pdf');
        });



        //return $pdf->download('Latecomers.pdf');  
         return $this->info('PDF file has been generated successfully');
         
    }
}
