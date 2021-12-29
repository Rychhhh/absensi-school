<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','user_nis','tgl', 'jamdatang','jamkeluar'
    ];
    
    public function user() {
        return $this->belongsTo(User::class,'nis');
    }
}
