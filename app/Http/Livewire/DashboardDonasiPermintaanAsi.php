<?php

namespace App\Http\Livewire;

use App\Models\AsiProduct;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardDonasiPermintaanAsi extends Component
{
    public function render()
    {
        $DataUser = User::findOrFail(Auth::user()->id); //array
      //  $arrayDataPermintaanAsi = $DataUser->asiResipiens;


        return view('livewire.dashboard-donasi-permintaan-asi')->with([
            'DataPermintaanAsi' => $DataUser->asiResipiens
        ]);
    }
}
