<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jns_dokumen extends Model
{
    use HasFactory;
    protected $table ='jns_dokumen';
    protected $fillable = [ 'id', 'user_id', 'jns_dokumen', 'created_at', 'updated_at'];
}
