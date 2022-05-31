<div>
    <input wire:model="contact.name" type="text">
{{--    @foreach($names as $name)--}}
{{--        @livewire('say-hi', ['name' => $name], key($name))--}}
{{--    @endforeach--}}

    @foreach($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact))
    @endforeach
</div>
