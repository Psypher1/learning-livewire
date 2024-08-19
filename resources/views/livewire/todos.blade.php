<div>
    <div style="margin: 3rem; font-size: 1.2rem;" class="">
        <form wire:submit="add">
            {{-- wire:model doesn't send any network request --}}
            {{-- modifiers will enable live updates --}}
            {{-- wire:model.live --}}
            {{-- wire:model.change - when tabbed away --}}
            <input type="text" wire:model="todo" style="padding-inline: .5rem; padding-block: .3rem">
            <button style="padding-inline: .5rem; padding-block: .3rem">Add todo</button>
        </form>
        <p>Current todo: {{ $todo }}</p>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
