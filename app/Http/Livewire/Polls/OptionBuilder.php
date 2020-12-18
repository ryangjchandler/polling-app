<?php

namespace App\Http\Livewire\Polls;

use App\Models\Poll;
use App\Models\PollOption;
use Livewire\Component;

class OptionBuilder extends Component
{
    public Poll $poll;

    public array $state = [
        'label' => '',
    ];

    protected $rules = [
        'state.label' => ['required', 'string', 'max:45'],
    ];

    protected $validationAttributes = [
        'state.label' => 'Label',
    ];

    public function add()
    {
        $this->validate();

        $this->poll->pollOptions()->create($this->state);

        $this->poll->refresh();

        $this->reset('state');
    }

    public function update(PollOption $pollOption, string $label)
    {
        $pollOption->update([
            'label' => $label,
        ]);
    }

    public function render()
    {
        return view('livewire.polls.option-builder');
    }
}
