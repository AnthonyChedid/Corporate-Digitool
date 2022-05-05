<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedChallenge extends Model
{
    use HasFactory;
    protected $fillable =['challenge_id','user_id','isFinished'];
}

