<?php

namespace App\Http\Livewire;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DonateAsi extends Component
{
    public $asiId;
    public $useCourier = false;
    public $address;
    public $quantity;

    public function mount($asiId)
    {
        $this->asiId = $asiId;
    }

    public function render()
    {
        return view('livewire.donate-asi')->with([
            'getAsiProductDetail' => AsiProduct::find($this->asiId),
        ]);
    }

    public function requestAsi()
    {
        $this->validate([
            'quantity' => 'required|integer',
            'address' => 'exclude_if:useCourier,false|required',
        ]);

        AsiBoard::create([
            'asi_product_id' => $this->asiId,
            'receiver_id' => Auth::user()->id,
            'progress' => 1,
            'quantity_request' => $this->quantity,
            'courir_request' => $this->useCourier,
            'detail_address_resipien' => $this->address ?? '',
        ]);

        return redirect(route('dashboard'))->with([
            'flash.banner' => 'Berhasil melakukan request produk asi!',
            'flash.bannerStyle' => 'success',
        ]);
    }
}
