<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cetak extends Mailable
{
    Public $data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hidroponikapps@gmail.com','Sistem Pakar Ganguang Mental Anak')->subject('Cetak Hasil ('.$this->data["data"].")")->markdown('emails.cetak')->with('data',$this->data);
    }
}
