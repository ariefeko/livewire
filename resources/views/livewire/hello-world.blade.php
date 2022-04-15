<div>
    <input wire:model.debounce.1000ms="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>


    {{ implode(', ', $greeting) }} {{ strtoupper($name) }} @if ($loud) ! @endif
</div>
