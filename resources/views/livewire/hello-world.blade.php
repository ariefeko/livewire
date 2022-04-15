<div>
    <input wire:model.debounce.1000ms="name" type="text">
    <input wire:model="loud" type="checkbox">

    Hello {{ strtoupper($name) }} @if ($loud) ! @endif
</div>
