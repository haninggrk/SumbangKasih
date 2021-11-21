<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DashboardDonasiPengajuanAsi extends Component
{
    public $page = 'asi';
    protected $queryString = ['page'];

    public function render()
    {
        $DataUser = User::findOrFail(auth()->user()->id); //array
        return view('livewire.dashboard-donasi-pengajuan-asi')->with([
            'DataPermintaanAsi' => $DataUser->asiResipiens,
        ]);
    }

    public function setPage($page)
    {
        $pageLower = strtolower($page);
        $this->page = $pageLower;
    }
}
