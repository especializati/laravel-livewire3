<?php

namespace App\Livewire\User;

use App\Livewire\Forms\User\CreateForm;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Create extends Component
{
    

    public CreateForm $form;

    public string $showPassword = '';

    public Collection $users;

    public function mount()
    {
        $this->getAllUsers();
    }


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

    public function delete(User $user): void
    {
        $user->delete();
        $this->users = $user->all();
        /*$this->users = array_filter($this->users, function($user) use ($id){
            return $user['id'] !== $id;+
        });*/
    }

    private function getAllUsers(): void
    {
        $this->users = User::all();
    }

    public function save(): void
    {
        //request()->all();

        sleep(3);
        $created = User::create($this->form->validate());

        if($created) $this->getAllUsers();

    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
