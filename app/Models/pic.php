<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pic extends Model
{

    public $fillable =['id','nama','progres'];
    public $timestamps = true;
    use HasFactory;
}
