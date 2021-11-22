<?php

namespace App\Http\Livewire;

use App\Models\AsiProduct;
use Livewire\Component;

class UploadDonasiAsi extends Component
{
    public $useCourier = false;
    public $tanggal_melahirkan;
    public $city;
    public $liter_per_pack;
    public $quantity;
    public $agama;
    public $product_picture;
    public $description;
    public $detail_address;
    public $bukti_foto_covid19;

    public function render()
    {
        return view('livewire.upload-donasi-asi');
    }

    public function AddAsi()
    {
       
            $this->validate([
            'quantity' => 'required|integer',
            'tanggal_melahirkan' => 'required',
            'city' => 'required',
            'liter_per_pack' => 'required',
         
            'product_picture' => 'required',
            'description' => 'required',
            'detail_address' => 'required',
            'bukti_foto_covid19' => 'required',
        ]);

         AsiProduct::create([
            'quantity' => $this->quantity,
            'quantityupdated' => $this->quantity,
            'tanggal_melahirkan' => $this->tanggal_melahirkan,
            'city' => $this->city,
            'kurir'=>0,
            'liter_per_pack' => $this->liter_per_pack,
            'product_picture' => 'productpicture',
            'description' => $this->agama ?? ''.', '.$this->description,
            'detail_address' => $this->detail_address,
            'bukti_foto_covid19' => 'buktifotocovid19',
        ]);

            return redirect(route('dashboard'))->with([
            'flash.banner' => 'Berhasil mengupload produk asi!',
            'flash.bannerStyle' => 'success',
        ]);
      
    }
}
