<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    // Nama Tabel
    protected $table = 'subkategori';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['id_kategori','nama_subkategori','kode_subkategori'];

 	// Relasi One-to-Many
	// =================
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori', 'id_kategori');
    }
    public function subsubkategori()
    {
    	return $this->hasMany('App\SubSubKategori', 'id_subkategori');
    }
}
