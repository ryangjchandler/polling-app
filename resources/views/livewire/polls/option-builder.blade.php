<div class="space-y-4">
    <div class="space-y-4">
        @foreach($poll->pollOptions as $pollOption)
            <div class="flex items-center space-x-4">
                <span>{{ $loop->iteration }}</span>
                <x:input wire:change="update({{ $pollOption->id }}, $event.target.value)" type="text" class="block w-full" value="{{ $pollOption->label }}" />
            </div>
        @endforeach
    </div>

    <form wire:submit.prevent="add" class="space-y-4">
        <div class="flex flex-col space-y-4">
            <x:input placeholder="Enter label here" type="text" class="block w-full" wire:model="state.label" />

            @error('state.label')
                <p class="text-sm text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end">
            <x:button>
                Add Option
            </x:button>
        </div>
    </form>
</div>
