<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserCount extends Component
{
    public int $qtdUsers = 0;
    public bool $showLabel = true;

    public function render()
    {
        return view('livewire.user.user-count');
    }

    public function incrementar(): void
    {
        $this->qtdUsers++;
    }

    public function showEvent(string $value): void
    {
        dd($value);
    }
}
