<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WithdrawMoneyPartials extends Component
{
    public $openWithdrawModal = false;
    public $withdrawAmount;
    public $message;

    public function render()
    {
        return view('livewire.withdraw-money-partials');
    }

    public function withdrawMoney()
    {

    }
}
