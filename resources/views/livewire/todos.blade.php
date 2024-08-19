<div>
    <div style="margin: 3rem; font-size: 1.2rem;" class="">
        <input type="text" wire:model="todo">
        <button type="button" wire:click="add">Add todo</button>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
