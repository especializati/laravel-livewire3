<div>
    <input type="text" wire:model="name">
    <button wire:click="pushName">Salvar</button>

    <ul>
        @forelse ($names as $item)
            <li>{{ $item }}</li>
        @empty
            <h3>Não existem dados</h3>
        @endforelse
    </ul>
</div>
