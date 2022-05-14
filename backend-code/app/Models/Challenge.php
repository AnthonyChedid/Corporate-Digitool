<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChallengeType;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable=['name','challenge_type_id','document_type_id'];

    public function challenge_type(){
        return $this->belongsTo(ChallengeType::class,'challenge_type_id');
    }

    public function document_type(){
        return $this->belongsTo(DocumentType::class,'document_type_id');
    }


}
