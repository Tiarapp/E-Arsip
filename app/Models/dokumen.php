<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;
    protected $table ='dokumen';
    protected $fillable = [ 'id', 'user_id', 'jns_dokumen_id', 'nm', 'deskripsi', 'jml', 'file'];

    public function id_jns_dokumen()
    {
    	return $this->belongsTo('App\Models\jns_dokumen','jns_dokumen_id', 'id');
    }
}
