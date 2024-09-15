<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public string $document = '';
    public string $name = '';
    public string $email = '';
    public string $password = '';

    public string $showPassword = '';


    public function actionClick(): void
    {
        dd('Action click');
    }

    public function actionKeyDown(): void
    {
        $this->showPassword = $this->password;
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

    public function actionPrevent(): void
    {
        dd('Action prevent');
    }

    public function actionClickOutside(): void
    {
        dd('Action Click Outside');
    }

    public function actionDocument(): void
    {
        dd('Action Document');
    }

    public function actionResize(): void
    {
        dd('Action resize');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
