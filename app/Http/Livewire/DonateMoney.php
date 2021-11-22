<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Donation;
use App\Services\Midtrans\MidtransTransaction;
use Livewire\Component;

class DonateMoney extends Component
{
    public $idKategori;
    public $openDonationModal = false;

    public $donatorData = [
        'amount' => 10000,
        'anonymous' => false,
        'message' => null
    ];

    public function mount($idKategori)
    {
        $this->idKategori = $idKategori;
    }

    public function render()
    {
        return view('livewire.donate-money')->with([
            'category' => Category::find($this->idKategori)
        ]);
    }

    public function doDonation()
    {
        $category = Category::find($this->idKategori);

        $this->validate([
            'donatorData.amount' => 'required|numeric|gt:9999',
        ]);

        $donation = Donation::create([
            'user_id' => auth()->user()->id,
            'category_id' => $category->id,
            'message' => $this->donatorData['message'] ?? null,
            'amount' => $this->donatorData['amount'],
            'is_anonymous' => $this->donatorData['anonymous'],
            'payment_status' => 1,
        ]);

        $transactionId = "SA-DONASI-{$donation->id}-C-{$category->id}-U-" . \Str::random(6);

        $midTransaction = new MidtransTransaction(
            $transactionId, $this->donatorData['amount'], auth()->user(), (int)$category->id, $category->name
        );

        $transaction = $midTransaction->create();

        $donation->update([
            'snap_token' => $transaction->token,
            'payment_url' => $transaction->redirect_url,
            'transaction_id' => $transactionId
        ]);

        $this->redirect($transaction->redirect_url);
    }

    public function getDonatorList()
    {
        return Donation::where('category_id', $this->idKategori)->where('payment_status', 2)->orderBy('created_at', 'desc');
    }

    public function shouldDisplayName($donator)
    {
        return (!(bool)$donator->is_anonymous) && (optional($donator->user)->name !== null);
    }

    public function displayAvatar($donator)
    {
        return $this->shouldDisplayName($donator) ? $donator->user->profile_photo_url : "https://ui-avatars.com/api/?name=A&color=EF4136&background=EBF4FF";
    }

    public function toggleDonationModal()
    {
        $this->openDonationModal = !$this->openDonationModal;
    }
}
