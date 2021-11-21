<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DashboardProductDonorDonasiAsi extends Component
{
    public $page = 'asi';
    protected $queryString = ['page'];

    public function render()
    {
        $DataUser = User::findOrFail(auth()->user()->id); //array
        
        return view('livewire.dashboard-product-donor-donasi-asi', [
            'DataDonorAsiUser' => $DataUser->asiProducts
        ]);
    }

    public function setPage($page)
    {
        $pageLower = strtolower($page);
        $this->page = $pageLower;
    }
}
