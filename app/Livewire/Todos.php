<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [];
    // public $todos = [
    //     'customise terminal',
    //     'lean livewire'
    // ];

    // initialise properies
    public function mount()
    {
        // $this->todos = Todo::all;
        $this->todos = [
            'customise terminal',
            'lean livewire'
        ];
    }

    // public function updated($property, $value)
    // {
    //     $this->$property = strtoupper($value);
    // }
    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
