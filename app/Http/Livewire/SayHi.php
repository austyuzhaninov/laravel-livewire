<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public string $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
