<div>
    <form>
        teste
        <p class="text-light">Por favor, logue na sua conta</p>

        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" placeholder="Digite seu email" wire:model="email" />
            <label class="form-label" for="email">E-mail</label>
            <h2 x-text="$wire.get('email').length"></h2>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control" wire:model="password"/>
            <label class="form-label" for="password">Senha</label>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button wire:click="resetar" class="btn btn-warning btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                in</button>
            <a class="text-light" href="#!">Forgot password?</a>
        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <p class="mb-0 me-2 text-light">Crie sua conta</p>
            <button x-on:click="$wire.set('email','1234', false)" type="button" class="btn btn-warning gradient-custom-2">Criar
                Nova</button>
        </div>

        <ul>
            @forelse ($emails as $item)
                {{ $item }}
            @empty
                <h5>Não ha valores</h5>
            @endforelse
        </ul>

    </form>
</div>
