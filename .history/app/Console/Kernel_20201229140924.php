<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use PDF;
use App\User;
use App\Borrowing;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Latecomer::class,
        Commands\LatecomersList::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('latecomer:reminder')
                 ->timezone('Africa/Casablanca')
                 ->twiceDaily(7, 12);
        $schedule->call(function(){
            $borrowings = Borrowing::where('must_be_returned_at','<',Carbon::now('Africa/Casablanca'))->get();
            $users = User::all();
            //$list = PDF::loadView('myPDF', compact('borrowings','users'));
            //$pdf = $list->download();
            $pdf = PDF::loadView('myPDF', compact('borrowings','users'), [
                'format' => 'A4'
           ]);
            
            $data = [
                'details' => 'This email is to notify you of this week sales and challenges we are facing as Sales department',
                
            ];
            Mail::send('emails.latecomers', $data, function ($message) use ($pdf) {
               $message->subject('HLAB Weekl Sales Report');
               $message->from('hajar@gmail.com');
               $message->to('maktabati@gmail.com');
               $message->attachData($pdf->output(),'document.pdf');
            });
    
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        })
                 ;
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
