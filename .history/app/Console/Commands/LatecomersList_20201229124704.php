<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDF;
use App\User;
use App\Borrowing;
namespace App\Http\Controllers;
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
        $pdf = new PDFController;
        //$pdf->save();
        if($pdf->generatePDF())
        {echo 'yesyes';}    
        else
        { echo 'nono';}   
         return $this->info('PDF file has been generated successfully');
         
    }
}
