<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;


class Home extends Component
{

    public function render()
    {
        return view('home.index');
    }
}
