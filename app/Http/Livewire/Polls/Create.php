<?php

namespace App\Http\Livewire\Polls;

use App\Models\Poll;
use Livewire\Component;

class Create extends Component
{
    public $state = [
        'name' => '',
        'expires_at' => null,
    ];

    protected $rules = [
        'state.name' => ['required', 'string'],
        'state.expires_at' => ['required', 'date'],
    ];

    protected $validationAttributes = [
        'state.name' => 'Name',
        'state.expires_at' => 'Expires At',
    ];

    public function submit()
    {
        $this->validate();

        $poll = Poll::create([
            'name' => $this->state['name'],
            'expires_at' => $this->state['expires_at'],
            'user_id' => auth()->user()->id,
        ]);

        dd($poll);
    }

    public function render()
    {
        return view('livewire.polls.create');
    }
}
