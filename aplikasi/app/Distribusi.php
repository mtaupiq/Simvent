<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    // Nama Tabel
    protected $table = 'distribusi';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['tgl_distribusi'];

 	// Relasi One-to-Many
	// =================
    public function barang()
    {
    	return $this->hasMany('App\Barang', 'id_barang');
    }
}
