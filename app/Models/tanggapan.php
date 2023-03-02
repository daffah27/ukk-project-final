<?php

namespace App\Models;

use App\Models\pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tanggapan extends Model
{
    use HasFactory;
    protected $with = [
        'user','pengaduan'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pengaduan(){
        return $this->belongsTo(pengaduan::class);
    }
}
