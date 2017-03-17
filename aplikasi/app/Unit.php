<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    // Nama Tabel
    protected $table = 'unit';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama_unit'];

 	// Relasi One-to-Many
	// =================
    public function pengajuan()
    {
    	return $this->hasMany('App\Pengajuan', 'id_unit');
    }
}
