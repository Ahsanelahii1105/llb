<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{

    public $task = '';

    public $todos;

    public function mount(){
        $this->todos = Todo::all();
    }

    public function addtask(){
        $this->validate(['task' => 'required']);

        Todo::create(['task' => $this->task]);

        $this->task = '';

        $this->todos = Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
