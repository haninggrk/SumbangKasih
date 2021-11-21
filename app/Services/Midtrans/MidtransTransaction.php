<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class MidtransTransaction extends Midtrans
{
    protected $orderId;
    protected $amount;
    protected $name;
    protected $email;

    public function __construct($orderId, $amount, $name, $email)
    {
        parent::__construct();

        $this->orderId = $orderId;
        $this->amount = $amount;
        $this->name = $name;
        $this->email = $email;
    }

    public function create()
    {
        $transactionDetails = [
            'order_id' => $this->orderId,
            'gross_amount' => (int)$this->amount,

            'customer_details' => [
                'first_name' => $this->name,
                'email' => $this->email,
                'phone' => '0'
            ]
        ];

        $snap = Snap::createTransaction($transactionDetails);
    }
}
