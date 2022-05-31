<div>
    <input wire:model="name" type="text">
    {{--wire:model.debounce.10000ms="name" - delay after up key--}}
    {{--wire:model.lazy="name" -request sent after click away--}}

    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{--Hello {{ $loud ? strtoupper($name) : $name }}--}}
    {{ implode(', ', $greeting) }} {{ $name }} @if($loud) ! @endif

    {{--<button wire:click="resetName()">Reset Name</button> Run model method by button--}}
    {{--<button wire:click="resetName('Nikita')">Reset Name</button> Run model method(send parameter) by button--}}
    {{--<button wire:click="resetName($event.target.innerText)">Reset Name</button> Run model method(get text from bottom -> ResetName) by button--}}
    <form action="#" wire:submit.preveant="resetName('Nikita')">
        <button>Set name Nikita</button>
    </form>

    <form action="#" wire:submit.preveant="$set('name', 'Lev')"> {{--without model method--}}
        <button>Set name Lev</button>
    </form>

</div>
