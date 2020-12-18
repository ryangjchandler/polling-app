<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pollOption()
    {
        return $this->belongsTo(PollOption::class);
    }

    public function poll()
    {
        return $this->pollOption->poll;
    }
}
