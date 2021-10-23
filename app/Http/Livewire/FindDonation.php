<?php

namespace App\Http\Livewire;

use App\Models\AsiProduct;
use Livewire\Component;

class FindDonation extends Component
{
    public $page = "asi";
    protected $queryString = ['page'];

    public function render()
    {
        return view('livewire.find-donation')->with([
            'getAllAsiProduct' => AsiProduct::all(),
        ]);
    }

    public function setPage($page)
    {
        $pageLower = strtolower($page);
        $this->page = $pageLower;

    }
}
