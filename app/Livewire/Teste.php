<?php

namespace App\Livewire;

use Livewire\Component;

class Teste extends Component
{
    public string $name = '';
    public array $names = [];

    public function render()
    {
        return view('livewire.teste');
    }

    public function pushName(): void
    {
        if ($this->name !== '') {
            $this->names[] = $this->name;
        }
    }
}
