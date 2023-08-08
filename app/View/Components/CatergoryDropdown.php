<?php

namespace App\View\Components;

use Closure;
use App\Models\Catergory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CatergoryDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catergory-dropdown',[
            "catergories" => Catergory::all(),
            "currentCatergory" => Catergory::firstWhere('slug', request('catergory')),
        ]);
    }
}
