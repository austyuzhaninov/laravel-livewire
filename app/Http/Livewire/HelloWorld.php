<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public string $name = 'Ivan';
    public bool $loud = false;
    public array $greeting = ['Hello'];

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function resetName($name = 'Dmitriy')
    {
        $this->name = $name;
    }
}
