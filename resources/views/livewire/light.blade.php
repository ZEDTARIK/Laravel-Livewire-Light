<div>
    <h1>💡{{ $brightness }}%</h1>
    <div class="progress" style="height: 30px;">
        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $brightness }}%">
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-danger" wire:click="off" @if($brightness < 10) disabled @endif >Off</button>
        <button class="btn btn-dark" wire:click="increment" @if($brightness > 90) disabled @endif > + </button>
        <button class="btn btn-dark" wire:click="decrement" @if($brightness < 10) disabled @endif > - </button>
        <button class="btn btn-warning"wire:click="on" @if($brightness > 90) disabled @endif >On</button>
    </div>
</div>