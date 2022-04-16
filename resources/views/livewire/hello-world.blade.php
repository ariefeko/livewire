<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>


    {{ implode(', ', $greeting) }} {{ strtoupper($name) }} @if ($loud) ! @endif

    {{-- <button wire:click="resetName($event.target.innerText)">Reset Name</button> this is livewire event --}}

    <form action="#" wire:submit.prevent="resetName('Ndet')">
        <button>Reset Name</button>
    </form>
</div>
