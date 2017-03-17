<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubKategori extends Model
{
     // Nama Tabel
    protected $table = 'sub_subkategori';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama_sub_subkategori','kode_sub_subkategori'];

 	// Relasi One-to-Many
	// =================
    public function subkategori()
    {
    	return $this->belongsTo('App\SubKategori', 'id_subkategori');
    }
    public function barang()
    {
    	return $this->hasMany('App\Barang', 'id_sub_subkategori');
    }
}
