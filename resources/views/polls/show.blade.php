<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $poll->name }}
            </h2>
            <small class="font-semibold text-gray-600">Expires at {{ $poll->expires_at->format('d/m/Y') }}</small>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-center p-6 bg-white border-b border-gray-200">
                    <div class="w-1/2">
                        <livewire:polls.option-builder :poll="$poll" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
