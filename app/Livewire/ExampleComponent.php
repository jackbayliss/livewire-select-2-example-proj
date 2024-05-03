<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ExampleComponent extends Component
{
    public array $items = ['Books','Food','Games'];
    protected $listeners = ['callChange'];
    public ?string $triggered = null;

    public function render()
    {
        return view('livewire.example-component');
    }
    public function callChange($returned){
            $this->triggered = $returned['data'];
    }
}
