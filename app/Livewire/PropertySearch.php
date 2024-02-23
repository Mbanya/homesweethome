<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\HouseType;
use App\Models\Property;
use App\Models\SaleType;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class PropertySearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'simple-tailwind';

    /**
     * @var mixed|null
     */
    public mixed $houseType = null;
    /**
     * @var mixed|null
     */
    public mixed $title = null;
    /**
     * @var mixed|null
     */
    public mixed $saleType = null;
    /**
     * @var mixed|null
     */
    public mixed $city = null;


    public function render(): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $housetypes = HouseType::query()->get();
        $saletypes = SaleType::query()->get();
        $city_ids = Property::query()->where('status','=',1)
            ->get()
            ->pluck('city_id');
        $locations  = City::query()->whereIn('id',$city_ids)->get();

        $properties = Property::query()->with(['city','sale_type','house_type'])
            ->where('status','=',1)
            ->when($this->title, function ($query) {
            $query->where('title', 'like', '%' . $this->title . '%');
            })
            ->when($this->houseType, function ($query) {
                $query->where('house_type_id', $this->houseType);
            })
            ->when($this->saleType, function ($query) {
                $query->where('sale_type_id', $this->saleType);
            })
            ->when($this->city, function ($query) {
                $query->where('city_id', $this->city);
            })
            ->paginate(4);

        return view('livewire.property-search',[
            'properties'=>$properties,
            'housetypes' => $housetypes,
            'saletypes'=>$saletypes,
            'locations' => $locations,
            ]);
    }

    public function resetFilters()
    {
        $this->title = null;
        $this->houseType = null;
        $this->saleType = null;
        $this->city = null;
    }
}
