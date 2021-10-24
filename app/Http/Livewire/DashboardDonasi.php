<?php

namespace App\Http\Livewire;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardDonasi extends Component
{
    public function render()
    {
        return view('livewire.dashboard-donasi')->with([
            'getAllAsiProductDashboardRequest' => AsiProduct::where('progress','1')->where('user_id', Auth::user()->id)->get(),
            'getAllAsiProductDashboardHistory' => AsiProduct::whereBetween('progress', [2, 3])->where('user_id', Auth::user()->id)->get(),
            'getAllAsiProductDashboardInProgress'=> AsiProduct::where('progress', '0')->where('user_id', Auth::user()->id)->get()]);
    }
}
