<?php

namespace App\Http\Livewire;

use App\Models\Withdraw;
use Livewire\Component;

class WithdrawMoneyPartials extends Component
{
    public $openWithdrawModal = false;
    public $withdrawAmount;
    public $message;

    public function render()
    {
        return view('livewire.withdraw-money-partials')->with([
            'withdraws' => \App\Models\Withdraw::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function withdrawMoney()
    {
        $this->validate([
            'withdrawAmount' => 'required|numeric|lt:' . auth()->user()->receiverInfo->wallet,
            'message' => 'required'
        ]);

        Withdraw::create([
            'user_id' => auth()->user()->id,
            'amount' => $this->withdrawAmount,
            'status' => 1,
            'rejection_message' => ""
        ]);


        $this->openWithdrawModal = false;

    }
}
