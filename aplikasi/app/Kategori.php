<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Nama Tabel
    protected $table = 'kategori';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama_kategori','kode_kategori'];

 	// Relasi One-to-Many
	// =================
    public function subkategori()
    {
    	return $this->hasMany('App\SubKategori', 'id_kategori');
    }
}
