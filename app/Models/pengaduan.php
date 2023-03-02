<?php

namespace App\Models;

use App\Models\tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengaduan extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    protected $with = [
        'user','tanggapan'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tanggapan(){
        return $this->belongsTo(tanggapan::class);
    }
}
