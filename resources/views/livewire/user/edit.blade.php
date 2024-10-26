<div>
    <form wire:submit.prevent="save">
        <p class="text-light">Por favor, logue na sua conta</p>

        <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" wire:model.blur="form.name" />
            <label class="form-label" for="name">Nome</label>
            @error('form.name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="form-outline mb-4">
            <input type="text" id="document" class="form-control" wire:model.blur="form.document" />
            <!--<input type="text" id="document" class="form-control" wire:model.live.debounce.300ms="form.document" />-->
            <!--<input type="text" id="document" class="form-control" wire:model.blur="form.document" />-->
            <label class="form-label" for="document">Documento</label>
            @error('form.document')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" placeholder="Digite seu email"
            wire:model.blur="form.email" />
            <label class="form-label" for="email">E-mail</label>
            @error('form.email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control" wire:model.blur="form.password" />
            <label class="form-label" for="password">Senha</label>
            @error('form.password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <button type="button" class="btn btn-warning gradient-custom-2">Logue na sua conta</button>
        </div>
    </form>
</div>
