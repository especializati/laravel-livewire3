<div>
    @if ($showLabel)
        <h3>Qtd usuários {{ $qtdUsers }}</h3>
    @endif
    <input type="text" wire:keyup="showEvent($event.target.value)">
    <button type="button" wire:click="$refresh">Atualizar</button>
    <button type="button" wire:click="incrementar">Incrementar</button>
    <button type="button" wire:click="$parent.actionAlpine('testando')">Função Pai</button>
    <button type="button" wire:click="$toggle('showLabel')">{{ $showLabel ? 'Esconder' : 'Mostrar' }}</button>
</div>
