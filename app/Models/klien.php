<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klien extends Model
{
    use HasFactory;
    protected $table ='klien';
    protected $dates = ['tgl_lahir', 'tgl_masuk'];
    protected $fillable = [ 'id', 'user_id', 'nama', 'tgl_lahir', 'jenis_kel', 'alamat', 'tgl_msk', 'foto', 'keterangan'];

}
