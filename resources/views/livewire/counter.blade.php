<div class="col-12">
    <h2 class="text-center">Valore: {{ $value }}</h2>
    <div class="row">
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-primary" wire:click="incrementByNumber(1)">+1</button>
        </div>
        <div class="col-6 d-flex justify-content-center">
        <button class="btn btn-warning" wire:click="decrementByNumber(1)">-1</button>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-success" wire:click="incrementByNumber(5)">+5</button>
        </div> 
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-info" wire:click="decrementByNumber(4)">-4</button>
        </div>
    </div>
</div>


