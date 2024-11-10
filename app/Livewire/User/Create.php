<?php

namespace App\Livewire\User;

use App\Livewire\Forms\User\CreateForm;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Create extends Component
{
    

    public CreateForm $form;

    public string $showPassword = '';

    public Collection $users;

    public int $contador = 0;

    public string $nameAux = '';

    public string $message = '';

    public array $arrayTeste = [1,2,3];

    public function mount(User $user)
    {
        $this->users = $user->all();
        //$this->getAllUsers();
    }

    public function hydrate()
    {
        dump('hydrate');
        $this->message = "Componente hydrate";
    }

    public function dehydrate()
    {
        $this->arrayTeste = [1];
        //dump('dehydrate');
        //$this->message = 'Componente dehydrate';
    }

    /*public function boot()
    {   
        $this->contador += 1;
    }*/


    /*public function updating($property, $value)
    {
        if($property === 'form.name' && Request::method() == 'POST'){
            $this->nameAux = strtoupper($value);
        }
    }


    public function updated($property, $value)
    {
        if($property === 'form.name' && Request::method() == 'POST'){
            $this->nameAux = strtoupper($value)."Teste";
        }
    }

    public function rendering($view, $data)
    {
        $this->form->name = 'Luan Martins Especializa';
    }

    public function rendered($view, $html)
    {
        $this->form->name = 'Carlos Especializa';
    }*/


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
        if($this->form->create()) $this->getAllUsers();
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
