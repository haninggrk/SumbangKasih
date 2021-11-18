<?php

namespace App\Http\Livewire;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use Livewire\Component;

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
        $asiProduct = AsiProduct::findOrFail($this->asiId);

        if ($asiProduct->quantity >= $this->quantity && $this->quantity > 0) {
            $this->validate([
            'quantity' => 'required|integer',
            'address' => 'exclude_if:useCourier,false|required',
        ]);

            $cekRequest = AsiBoard::create([
            'asi_product_id' => $this->asiId,
            'receiver_id' => auth()->user()->id,
            'progress' => 1,
            'quantity_request' => $this->quantity,
            'courir_request' => $this->useCourier,
            'detail_address_resipien' => $this->address ?? '',
        ]);
            if ($cekRequest) {
                $asiProduct->update(['quantity' => $asiProduct->quantity - $this->quantity]);
            }

            return redirect(route('dashboard'))->with([
            'flash.banner' => 'Berhasil melakukan request produk asi!',
            'flash.bannerStyle' => 'success',
        ]);
        } elseif ($this->quantity <= 0) {
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Gagal melakukan request produk asi! Minimal request 1 product asi!',
                'flash.bannerStyle' => 'failed',
            ]);
        } else {
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Gagal melakukan request produk asi! Quantity asi yang dipesan tidak cukup!',
                'flash.bannerStyle' => 'failed',
            ]);
        }
    }
}
