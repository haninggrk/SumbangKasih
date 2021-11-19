<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DashboardDonasi extends Component
{
    public $page = 'asi';
    protected $queryString = ['page'];
    public function render()
    {
        $DataAsiProducts = User::findOrFail(auth()->user()->id)->asiProducts; //array
        $arrayDataResipienAsi = [];
        foreach ($DataAsiProducts as $DataAsi) {
            foreach ($DataAsi->Users as $DataResipien) {
                array_push($arrayDataResipienAsi, $DataResipien);
            }
        }

        $DataUser = User::findOrFail(auth()->user()->id); //array
        

        return view('livewire.dashboard-donasi')->with([
            'DataResipienAsi' => $arrayDataResipienAsi,
            'DataPermintaanAsi' => $DataUser->asiResipiens,
            'DataDonorAsiUser' => $DataUser->asiProducts,
        ]);
    }


    public function setPage($page)
    {
        $pageLower = strtolower($page);
        $this->page = $pageLower;
    }
}
