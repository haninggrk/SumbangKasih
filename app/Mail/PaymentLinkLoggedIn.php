<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentLinkLoggedIn extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public $midtransUrl,
        public $transactionId
    )
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
        return $this->markdown('emails.paymentlink.loggedin', [
            'midtransUrl' => $this->midtransUrl,
            'transactionId' => $this->transactionId
        ])->subject("{$this->transactionId} - Link Pembayaran");
    }
}
