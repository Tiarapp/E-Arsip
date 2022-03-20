<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jns_dokumen extends Model
{
    use HasFactory;
    protected $table ='jns_dokumen';
    protected $fillable = [ 'id', 'user_id', 'jns_dokumen_id', 'nm', 'deskripsi', 'jml', 'keterangan', 'file', 'created_at', 'updated_at'];
}
