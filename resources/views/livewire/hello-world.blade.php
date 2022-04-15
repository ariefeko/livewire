<div>
    <input wire:model.debounce.1000ms="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" id="">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>


    {{ $greeting }} {{ strtoupper($name) }} @if ($loud) ! @endif
</div>
