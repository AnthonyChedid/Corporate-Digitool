<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends \TCG\Voyager\Models\User
{
    protected $fillable =['teamName'];
    use HasFactory;
}
