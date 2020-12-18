<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class PollOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userHasVotedFor()
    {
        return $this->votes->filter(function (Vote $vote) {
            return Hash::check(request()->ip().':'.request()->userAgent(), $vote->voter_hash);
        })->isNotEmpty();
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
