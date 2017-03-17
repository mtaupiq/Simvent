<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // Nama Tabel
    protected $table = 'barang';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama_barang','minimal_cadangan','cadangan'];

 	// Relasi One-to-Many
	// =================
	public function subsubkategori()
    {
    	return $this->belongsTo('App\SubSubKategori', 'id_sub_subkategori');
    }
    public function pembelian()
    {
    	return $this->belongsTo('App\Pembelian', 'id_barang');
    }
    public function distribusi()
    {
    	return $this->belongsTo('App\Distribusi', 'id_barang');
    }
    public function detailpengajuan()
    {
    	return $this->belongsTo('App\DetailPengajuan', 'id_barang');
    }
}
