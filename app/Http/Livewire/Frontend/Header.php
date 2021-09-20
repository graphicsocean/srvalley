<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Header extends Component
{
    public $navigation;
    public function render()
    {
        return view('livewire.frontend.header');
    }
}
