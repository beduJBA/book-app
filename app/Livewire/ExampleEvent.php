<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ExampleEvent extends Component
{

    #[On('example-event')]

    public function doSomething()
    {
        dd('doSomething');
    }

    public function dispatchSomeEvent()
    {
        $this->dispatch('example-event');
    }

    public function render()
    {
        return view('livewire.example-event');
    }
}
