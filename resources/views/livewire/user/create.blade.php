<div wire:keydown.document.escape="actionDocument" wire:resize.window="actionResize">
    <form wire:submit.prevent="save">
        <p class="text-light">Por favor, logue na sua conta</p>

        <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" wire:model="name"
                wire:keydown.shift.enter="actionKeyDown" />
            <label class="form-label" for="name">Nome</label>
        </div>


        <div class="form-outline mb-4">
            <input type="text" id="document" class="form-control" wire:model="document"
                wire:dblclick.once="actionDoubleClick" />
            <label class="form-label" for="document">Documento</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" placeholder="Digite seu email"
                wire:model="email" />
            <label class="form-label" for="email">E-mail</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control" wire:model="password"
                wire:keydown.throttle.2000ms="actionKeyDown" />
            <label class="form-label" for="password">Senha</label>
            <h1>Senha: {{ $showPassword }}</h1>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-warning btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in
                <div  wire:loading class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
            <a class="text-light" href="#!">Forgot password?</a>
        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <p class="mb-0 me-2 text-light">Crie sua conta</p>
            <a href="{{ route('user.login') }}" wire:click.prevent="actionPrevent">Tela de login</a>
            <button type="button" class="btn btn-warning gradient-custom-2">Criar Nova</button>
        </div>

        <ul>
            @foreach ($users as $user)
                <li class="my-4" wire:key="{{ $user->id }}">
                    {{ $user->name }} <button type="button" wire:click="delete({{ $user }})"
                        wire:confirm="Voce realmente deseja excluir esse usuário?"
                        class="btn btn-primary">Excluir</button>
                </li>
            @endforeach
        </ul>
    </form>
</div>
