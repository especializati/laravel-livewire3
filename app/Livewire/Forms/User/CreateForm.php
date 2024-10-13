<?php

namespace App\Livewire\Forms\User;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    //#[Validate('required', message: 'O campo CPF é requerido')]
    //#[Validate('min:14', message: 'O campo CPF precisa ter no minimo 14 caracters')]
    //#[Validate('max:14', message: 'O campo CPF precisa ter no máximo 14 caracters')]
    public string $document = '';
    //#[Validate('required|min:4|max:255')]
    public string $name = '';
    //#[Validate('required|email')]
    public string $email = '';
    //#[Validate('required|min:4|max:10')]
    public string $password = '';

    public ?User $user = null;


    public function rules(): array
    {
        return [
            'document' => [
                'required',
                'min:14',
                'max:14',
            ],
            'name' => [
                'required',
                'min:4',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->user)
            ],
            'password' => [
                'required',
                Password::min(5)
                    ->max(15)
                    ->numbers()
                    ->symbols()
            ],
        ];
    }

    public function create(): bool
    {

        sleep(3);

        $this->validate();

        if (User::create($this->pull())) {
            return true;
        }

        return false;
    }
}
