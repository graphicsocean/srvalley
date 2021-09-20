<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ExploreBanquate extends Component
{
    public $banquets;

    public function render()
    {
        return view('livewire.frontend.explore-banquate');
    }
}
