<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
