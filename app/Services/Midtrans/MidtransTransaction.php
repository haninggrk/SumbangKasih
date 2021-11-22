<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class MidtransTransaction extends Midtrans
{
    protected $orderId;
    protected $amount;
    protected $user;
    protected $donationId;
    protected $donationName;

    public function __construct($orderId, $amount, $user, $donationId, $donationName)
    {
        parent::__construct();

        $this->orderId = $orderId;
        $this->amount = $amount;
        $this->user = $user;
        $this->donationId = $donationId;
        $this->donationName = $donationName;
    }


    public function create()
    {
        try {
            $transactionDetails = [
                'transaction_details' => [
                    'order_id' => $this->orderId,
                    'gross_amount' => (int)$this->amount,
                ],

                'customer_details' => [
                    'first_name' => $this->user->name,
                    'email' => $this->user->email,
                    'phone' => $this->user->phone,
                ],

                'item_details' => [
                    [
                        'id' => $this->donationId,
                        'price' => $this->amount,
                        'quantity' => 1,
                        'name' => "Donasi ke " . $this->donationName . " melalui SumbangAsih"
                    ]
                ]
            ];
            return Snap::createTransaction($transactionDetails);
        } catch (\Exception $e) {
            \Log::critical($e->getMessage());
            return $e->getMessage();
        }
    }
}
