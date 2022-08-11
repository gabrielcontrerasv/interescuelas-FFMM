<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = "participants";

    protected $fillable = [
        '#identification',
        'type_doc_id',
        'force_id',
        'grade_id',
        'name',
        'blood_type',
        'height',
        'weight',
        'photo',
        'email',
        'birthday',
        'gender_id',
        'sport_id',
        'category_id',
        'nationality_id',
        'phone'
    ];
}
