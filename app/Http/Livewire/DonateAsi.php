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

        if ($asiProduct->quantityupdated >= $this->quantity && $this->quantity > 0) {
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

            return redirect(route('dashboard'))->with([
            'flash.banner' => 'Berhasil memesan produk asi!',
            'flash.bannerStyle' => 'success',
        ]);
        } elseif ($this->quantity <= 0) {
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Gagal memesan produk asi! Minimal memesan 1 produk asi!',
                'flash.bannerStyle' => 'failed',
            ]);
        } else {
            return redirect(route('dashboard'))->with([
                'flash.banner' => 'Gagal memesan produk asi! Jumlah pesanan asi yang dipesan tidak cukup!',
                'flash.bannerStyle' => 'failed',
            ]);
        }
    }
}
