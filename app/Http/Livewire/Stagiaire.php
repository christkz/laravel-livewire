<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Stagiaire extends Component
{
    public function render()
    {
        return view('livewire.stagiaire')->layout('templates.default');
    }
}
