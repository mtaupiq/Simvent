<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    // Nama Tabel
    protected $table = 'pembelian';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama_sub_subkategori','kode_sub_subkategori'];

 	// Relasi One-to-Many
	// =================
    public function barang()
    {
    	return $this->hasMany('App\Barang', 'id_barang');
    }
}
