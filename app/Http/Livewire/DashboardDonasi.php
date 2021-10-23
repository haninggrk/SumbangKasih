<?php

namespace App\Http\Livewire;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use Livewire\Component;

class DashboardDonasi extends Component
{
    public function render()
    {
        return view('livewire.dashboard-donasi')->with([
            'getAllAsiProductDashboardRequest' => AsiProduct::where('progress','1')]);
    }
}
