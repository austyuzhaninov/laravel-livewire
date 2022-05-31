<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        return view('livewire.hello-world',
            ['name' => 'Ivan'] // example of passing data into template
        );
    }
}
