<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competence_user extends Model
{
    use HasFactory;
    protected $fillable=['competence_id','user_id','isSuccessful'];
}
