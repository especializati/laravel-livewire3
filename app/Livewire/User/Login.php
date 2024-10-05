<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Login extends Component
{
    #[Locked]
    public int $id = 20;
    public string $email = 'teste@gmail.com';
    public string $password = '12345';
    public array $emails = [];

    public function render()
    {
        return view('livewire.user.login');
    }


    public function resetar(): void
    {
        dd($this->emailUpper);
        // logica de login ou logica de salvar //
        $this->id = 60; 
        //$this->reset('email');
    }

    #[Computed]
    public function emailUpper(): string
    {
        return strtoupper($this->email);
    }

    public function actionAlpine(string $teste): void
    {
        dd($teste);
    }

    public function getCountUsers(): string
    {
        $qtd = User::count();

        return "Quantidade de usuários: {$qtd}";
    }

    public function salvar(): void
    {
        $this->emails[] = $this->pull('email');
    }
}
