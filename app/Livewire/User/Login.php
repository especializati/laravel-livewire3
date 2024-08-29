<?php

namespace App\Livewire\User;

use Livewire\Component;

class Login extends Component
{
    public string $email = 'teste@gmail.com';
    public string $password = '12345';
    public array $emails = [];

    public function render()
    {
        return view('livewire.user.login');
    }


    public function resetar(): void
    {
        // logica de login ou logica de salvar // 
        $this->reset('email');
    }

    public function salvar(): void
    {
        $this->emails[] = $this->pull('email');
    }
}
