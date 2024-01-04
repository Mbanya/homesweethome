<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;

class CitiesDropdown extends Component
{

    public $search = '';
    public function render()
    {
        $cities = City::query()
            ->where('name', 'like','%'.$this->search.'%')
            ->paginate(20);
        return view('livewire.cities-dropdown',['cities'=>$cities]);
    }
}
