<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;
class team_user extends User
{
    use HasFactory;
    protected $fillable =['user_id','team_id'];
}
