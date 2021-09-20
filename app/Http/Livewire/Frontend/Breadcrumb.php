<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.frontend.breadcrumb');
    }
}
