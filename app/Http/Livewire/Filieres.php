<?php

namespace App\Http\Livewire;

use App\Models\Filiere;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Filieres extends Component
{
    public $filiere_id;
    public $nom_filiere;
    public $niveau;
    protected $rules;
    public $updateMode = false;

    public function hydrate(){

        $this->rules = [

            'nom_filiere' => ['required', 'min:3', 'max:50', Rule::unique('filieres')->ignore($this->filiere_id)],
            'niveau' => ['required'],
         ];
    }

    public function render()
    {
        return view('livewire.filieres.index',[
            'filieres' =>Filiere::all()
        ])->layout('templates.default');
    }

    public function updated($Name)
    {
        $this->validateOnly($Name);
    }

    public function edit(Filiere $filiere)
    {
        $this->updateMode = true;
        $this->resetValidation();

        $this->filiere_id = $filiere->id;
        $this->nom_filiere = $filiere->nom_filiere;
        $this->niveau = $filiere->niveau;

    }
    public function submit()
    {
        $this->validate();

        $filiere = $this->updateMode
            ? (Filiere::find($this->filiere_id))
            : (new Filiere());
        $filiere->nom_filiere = $this->nom_filiere;
        $filiere->niveau = $this->niveau;


        $filiere->save();

        if ($this->updateMode) {
            session()->flash('message', 'Filiere successfully updated.');
        } else {
            session()->flash('message', 'Filiere successfully created.');
        }

        $this->clear();
    }
    public function delete(Filiere $filiere)
    {
        $filiere->delete();

        session()->flash('message', 'Filiere deleted successfully.');

        $this->clear();
    }
    public function clear()
    {
        $this->filiere_id = '';
        $this->nom_filiere = '';
        $this->niveau = '';
        $this->updateMode = false;
        $this->resetValidation();
    }
}
