<?php

namespace App\Livewire\User;

use App\Livewire\Forms\User\CreateForm;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public CreateForm $form;

    public function mount(User $user): void
    {
        $this->form->name = $user->name;
        $this->form->password = $user->password;
        $this->form->email = $user->email;
        $this->form->document = $user->document;
        $this->form->user = $user;
    }

    public function updated($name, $value): void
    {
        $name = str_replace('form.','',$name);

        $this->form->user->update([$name => $value]);
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
