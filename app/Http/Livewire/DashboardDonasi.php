<?php

namespace App\Http\Livewire;

use App\Models\AsiProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class DashboardDonasi extends Component
{
    public function render()
    {
        $DataAsiProducts = User::findOrFail(auth()->user()->id)->asiProducts; //array
        $arrayDataResipienAsi = [];
        foreach ($DataAsiProducts as $DataAsi) {
            foreach ($DataAsi->Users as $DataResipien) {
                array_push($arrayDataResipienAsi, $DataResipien);
            }
        }

        return view('livewire.dashboard-donasi')->with([
           // 'getAllAsiProductDashboardRequest' => AsiProduct::where('progress','1')->where('user_id', Auth::user()->id)->get(),
           // 'getAllAsiProductDashboardHistory' => AsiProduct::whereBetween('progress', [2, 3])->where('user_id', Auth::user()->id)->get(),
           // 'getAllAsiProductDashboardInProgress'=> AsiProduct::where('progress', '0')->where('user_id', Auth::user()->id)->get()]);
          // 'getAllAsiProductDashboardRequest' => AsiProduct::findOrFail(auth()->User->id),
           //'getAllAsiProductDashboardHistory' => AsiProduct::findOrFail(auth()->User->id)->wherePivotIn('progress', [2, 3]),
           //'getAllAsiProductDashboardInProgress' => AsiProduct::findOrFail(auth()->User->id)->wherePivot('progress', 0),
           'DataResipienAsi' => $arrayDataResipienAsi, //array

           // 'getAllAsiProductDashboardHistory' => AsiProduct::whereBetween('progress', [2, 3])->where('user_id', Auth::user()->id)->get(),
           // 'getAllAsiProductDashboardInProgress'=> AsiProduct::where('progress', '0')->where('user_id', Auth::user()->id)->get()
        ]);
    }
}
