<?php

namespace App\Http\Livewire\Vote;

use App\Models\Poll;
use App\Models\PollOption;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PollOptions extends Component
{
    public Poll $poll;

    public function voteFor(PollOption $pollOption, bool $voted = false)
    {
        if ($voted) {
            return;
        }

        $pollOption->votes()->create([
            'voter_hash' => request()->ip().':'.request()->userAgent(),
        ]);

        $this->poll->refresh();
    }

    public function render()
    {
        return view('livewire.vote.poll-options');
    }
}
