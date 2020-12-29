<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListLC extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $pdf;


    public function __construct($pdf)
    {
        $pdf = $pdf->output();
        $this->pdf = $pdf;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.latecomers')->attachData($this->pdf, 'name.pdf', [
            'mime' => 'application/pdf',
        ]);;
    }
}
