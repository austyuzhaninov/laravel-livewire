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
</div>
