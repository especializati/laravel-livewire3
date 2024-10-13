<?php

namespace App\Livewire\Forms\User;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    #[Validate('required', message: 'O campo CPF é requerido')]
    #[Validate('min:14', message: 'O campo CPF precisa ter no minimo 14 caracters')]
    #[Validate('max:14', message: 'O campo CPF precisa ter no máximo 14 caracters')]
    public string $document = '';
    #[Validate('required|min:4|max:255')]
    public string $name = '';
    #[Validate('required|email')]
    public string $email = '';
    #[Validate('required|min:4|max:10')]
    public string $password = '';
}
