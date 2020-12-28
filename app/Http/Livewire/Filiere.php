<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Filiere extends Component
{
    public $filiere_id;
    public $nom_filiere;
    public $niveau;
    protected $rules;

    public function hydrate(){

        
    }

    public function render()
    {
        return view('livewire.filieres.index')->layout('templates.default');
    }
}
