<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newLaravelTips extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->to('ess2@ic.ufal.br', 'Erycles');
        return $this->view('mail.newLaravelTips', [
            'user' => 'Jonas TOPZERO'
        ])->subject('Código de Cadastro')->to('ess2@ic.ufal.br', 'Erycles');
    }
}
