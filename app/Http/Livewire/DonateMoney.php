<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Donation;
use Livewire\Component;

class DonateMoney extends Component
{
    public $idKategori;
    public $openDonationModal = false;

    public $donatorData = [
        'amount' => 10000,
        'anonymous' => false
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

    public function getDonatorList()
    {
        return Donation::where('category_id', $this->idKategori)->orderBy('created_at');
    }

    public function shouldDisplayName($donator){
        return ( !(bool)$donator->is_anonymous ) && ( optional($donator->user)->name !== null );
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
