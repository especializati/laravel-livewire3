<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public string $document = '';
    public string $name = '';
    public string $email = '';
    public string $password = '';


    public function actionClick(): void
    {
        dd('Action click');
    }

    public function actionKeyDown(): void
    {
        dd('Action KeyDown');
    }

    public function actionKeyUp(): void
    {
        dd('Action keyUp');
    }

    public function actionMouseEnter(): void
    {
        dd('Action MouseEnter');
    }

    public function actionDoubleClick(): void
    {
        dd('Action DoubleClick');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
