<x:guest-layout>
    <div class="p-36 max-w-2xl">
        <header class="space-y-2">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Vote for {{ $poll->name }}</h1>
            <small>Please click an option below to vote.</small>
        </header>

        <main class="mt-8">
            <livewire:vote.poll-options :poll="$poll" />
        </main>
    </div>
</x:guest-layout>
