<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardLivewire extends Component
{
    public function render()
    {
        return view('Livewire.dashboard.index')->layout('templates.default');
    }
}
