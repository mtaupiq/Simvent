<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
     // Nama Tabel
    protected $table = 'pengajuan';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['tgl_pengajuan','nama_pengajuan','niy','jabatan'];

 	// Relasi One-to-Many
	// =================
    public function unit()
    {
    	return $this->belongsTo('App\Unit', 'id_unit');
    }
}
