<?php

namespace App\Http\Livewire;

use App\Models\Departament;
use App\Models\Province;
use App\Models\Distric;
use Livewire\Component;

class Colegios extends Component
{
    public $departaments;
    public $provinces;
    public $districs;

    public $selectedDepartament = null;
    public $selectedProvince = null;
    public $selectedDistric = null;


    public function mount()
    {

        $this->districs = Distric::with('province.departament')
                                    ->where('province_id', '1'&& 'departament_id', '1')
                                    ->get();
      
    }

    public function render()
    {
        return view('livewire.colegios');
    }
}
