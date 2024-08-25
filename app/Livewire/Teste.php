<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Teste extends Component
{
    public string $name = '';
    public array $names = [];

    public function render()
    {
        return view('livewire.teste');
    }

    public function mount()
    {
        $this->names = Session::exists('names') ? Session::get('names') : [];
    }

    public function pushName(): void
    {
        if ($this->name !== '') {
            $this->names[] = $this->name;
            Session::push('names', $this->name);
            $this->name = '';
        }
    }
}
