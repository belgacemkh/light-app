<div>
    <h1 class="text-2xl font-extrabold dark:text-white text-center">&#128161; {{ $brightness }} %</h1>
    <div class="progress" style="height:20px;">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-label="Warning striped example" aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $brightness }}%"></div>
    </div>
    <div class="mt-3">
        <button class="btn btn-danger" wire:click="off">Off</button>
        <button class="btn btn-secondary" wire:click="increment" @if($brightness > 90) disabled @endif>+</button>
        <button class="btn btn-secondary"  wire:click="decrement" @if($brightness < 10) disabled @endif>-</button>
        <button class="btn btn-primary" wire:click="on">On</button>
    </div>
</div>
