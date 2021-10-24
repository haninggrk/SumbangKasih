<?php

namespace App\Http\Livewire;

use App\Models\ReceiverInfo;
use App\Models\User;
use Filament\Forms;
use Livewire\Component;

class RegisterFund extends Component
{


    // 0 = not register | 1 = waiting approval | 2 = approved;
    public $fundStatus = 0;
    public $state = [
        'occupancy' => 'umum',
        'category_id' => 1
    ];

    public function mount()
    {
        if (auth()->user()->user_type !== 2 && auth()->user()->receiverInfo !== null) {
            $this->fundStatus = 1;
        } elseif (auth()->user()->user_type === 2) {
            $this->fundStatus = 2;
        } else {
            $this->fundStatus = 0;
        }
    }

    public function registerForFund()
    {
        $this->validate([
            'state.nik' => 'required',
            'state.agree' => 'required'
        ]);

        if ($this->fundStatus === 1 || $this->fundStatus === 2) {
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Sudah pernah mengajukan!',
                'flash.bannerStyle' => 'danger'
            ]);
        } else {
            $user = User::find(auth()->user()->id);
            $user->receiverInfo()->create([
                'nik' => $this->state['nik'],
                'npm' => $this->state['npm'] ?? null,
                'str' => $this->state['str'] ?? null,
                'user_id' => auth()->user()->id
            ]);

            $user->update([
                'category_id' => (int)$this->state['category_id']
            ]);

            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Berhasil mengajukan permohonan sumbangan dana ke Sumbang Asih!',
                'flash.bannerStyle' => 'success'
            ]);
        }
    }

    public function render()
    {

        return view('livewire.register-fund');
    }
}
