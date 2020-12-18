<div class="space-y-2">
    <x:auth-validation-errors :errors="$errors" />

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <x:label class="text-base" for="name">Name</x:label>
            <x-input id="name" class="block mt-2 w-full" type="text" wire:model="state.name" autofocus />
        </div>
        <div>
            <x:label class="text-base" for="expires_at">Expires At</x:label>
            <x-input id="expires_at" class="block mt-2 w-full" type="date" wire:model="state.expires_at" autofocus />
        </div>
        <div class="flex items-center justify-end">
            <x:button>Create Poll</x:button>
        </div>
    </form>
</div>
