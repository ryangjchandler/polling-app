<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'expires_at' => 'date',
    ];

    public function userHasVotedFor()
    {
        return $this->pollOptions->filter(fn (PollOption $pollOption) => $pollOption->userHasVotedFor())->isNotEmpty();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pollOptions()
    {
        return $this->hasMany(PollOption::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(Vote::class, PollOption::class);
    }
}
