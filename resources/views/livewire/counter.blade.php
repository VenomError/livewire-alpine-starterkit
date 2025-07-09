<?php

use function Livewire\Volt\{state};

state([
    'count' => 1
]);

?>

<div>
    <h2 wire:text="count" ></h2>
    <button wire:click="increment" >+</button>
    <button wire:click="decrement" >-</button>
</div>
