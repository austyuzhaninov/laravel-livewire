<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public string $name = 'Ivan';
    //    public bool $loud = false;
    //    public array $greeting = ['Hello'];

    // get data by request http://0.0.0.0/?name="Dmitriy"
    //    public function mount(Request $request, $name)
    //    {
    //        $this->name = $request->input('name', $name);
    //    }

    /**
     * Runs once, immediately after the component is instantiated, but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     */
    public function mount($name)
    {
        $this->name = $name;
    }

    /**
     * Runs on every subsequent request, after the component is hydrated,
     * but before an action is performed, or render() is called
     */
    public function hydrate()
    {
        $this->name = 'Lev';
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     */
    public function updated()
    {
        $this->name = 'Nikolay';
    }

    /**
     * Runs after a property called $foo is updated. Array properties have additional $key argument as above
     */
    public function updatedName()
    {
        $this->name = 'Stas';
    }


    public function render()
    {
        return view('livewire.hello-world');
    }

    //    public function resetName($name = 'Dmitriy')
    //    {
    //        $this->name = $name;
    //    }


}
