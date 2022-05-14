<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
            'competence_id',
            'challenge_id',
            'taskName',
            'description',
            'result',
    ];

    public function competences(){
        return $this->belongsTo(ChallengeType::class,'competence_id');
    }
}
