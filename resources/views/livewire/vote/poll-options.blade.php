<section class="flex flex-col space-y-4">
    @foreach($poll->pollOptions as $pollOption)
        @php($votedFor = $poll->userHasVotedFor() && $pollOption->userHasVotedFor())

        <div class="flex items-center space-x-4">
            <x:button :disabled="! $votedFor" wire:click="voteFor({{ $pollOption->id }}, {{ json_encode($votedFor) }})" class="flex-1">
                {{ $pollOption->label }}
            </x:button>

            @if($votedFor)
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            @endif
        </div>
    @endforeach
</section>
