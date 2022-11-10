<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    public $fillable =['id','jenis_kebutuhan','kebutuhan','deskripsi','foto','pegawai_id'];
    public $timestamps = true;


     public function pegawai()
    {
        return $this->belongsTo(pegawai::class);
    }
    use HasFactory;
}
