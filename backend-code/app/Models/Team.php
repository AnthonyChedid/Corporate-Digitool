<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class Team extends User
{
    protected $fillable =['teamName'];
    use HasFactory;
}
