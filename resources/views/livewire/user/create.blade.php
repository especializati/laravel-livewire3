<div>
    <form wire:submit.prevent="save">
        <p class="text-light">Por favor, logue na sua conta</p>

        <h1>Status:{{ $this->message }}</h1>

        @php
            var_dump($arrayTeste);
        @endphp

        <div class="form-outline mb-4">
            <x-forms.input name="form.name" placeholder="Digite seu nome" label="Nome"/>
        </div>

        <div class="form-outline mb-4">
            <x-forms.input name="form.document" label="CPF"/>
        </div>

        <div class="form-outline mb-4">
            <x-forms.input name="form.email" type="email" placeholder="Digite seu e-mail" label="E-mail"/>
        </div>

        <div class="form-outline mb-4">
            <x-forms.input name="form.password" type="password" placeholder="Digite sua senha" label="Senha"/>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-warning btn-block fa-lg gradient-custom-2 mb-3" type="submit">Criar
                <div wire:loading class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <button type="button" class="btn btn-warning gradient-custom-2">Logue na sua conta</button>
        </div>
        <h1>Contador: {{ $contador }}</h1>
        <ul>
            @foreach ($users as $user)
                <li class="my-4" wire:key="{{ $user->id }}">
                    {{ $user->name }} <button type="button" wire:click="delete({{ $user }})"
                        wire:confirm="Voce realmente deseja excluir esse usuário?"
                        class="btn btn-primary">Excluir</button>
                    <a href="{{ route('user.edit', $user) }}" class="btn btn-primary" wire:navigate >Editar</a>
                </li>
            @endforeach
        </ul>
    </form>
</div>
