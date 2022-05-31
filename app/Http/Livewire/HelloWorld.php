<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public array $names = ['Ivan', 'Doris', 'Maria'];
    public array $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }

}
