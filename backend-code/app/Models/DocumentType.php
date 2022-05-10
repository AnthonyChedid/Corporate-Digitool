<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;

    protected $fillable=['typeName'];

    public function getTypeNameAttribute(){
        return $this->attributes['typeName'];
     }

    public $additional_attributes = ['type_name'];
}
