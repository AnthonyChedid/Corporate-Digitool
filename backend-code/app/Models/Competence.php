<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = [
        'competenceName',
    ];

     public function getCompetenceNameAttribute(){
            return $this->attributes['competenceName'];
         }

        public $additional_attributes = ['competence_name'];
}
