<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $table = "sports";

    protected $fillable = [
        "sport",
        "image",
        "description"
    ];

    public function discipline()
    {
        return $this->hasMany(Discipline::class);
    }
}
