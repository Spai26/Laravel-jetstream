<?php

namespace App\Http\Livewire;

use App\Models\Departament;

use Livewire\Component;

class LocationDropdown extends Component
{
    public $data;

    public function render()
    {   

        
        $allState = Departament::all();
        
        return view('livewire.location-dropdown', compact('allState'));
    }
}
