<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\datphong;

class ThongbaodatphongEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $datphong;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datphong)
    {
        $this->datphong = $datphong;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.thongbaoxem');
    }
}
