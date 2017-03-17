<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPengajuan extends Model
{
    // Nama Tabel
    protected $table = 'detail_pengajuan';

    // MASS ASSIGNMENT
    // Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['qty','brand','note'];

 	// Relasi One-to-Many
	// =================
    public function barang()
    {
    	return $this->hasMany('App\Barang', 'id_barang');
    }
    public function pengajuan()
    {
    	return $this->belongsTo('App\Pengajuan', 'id_pengajuan');
    }
}
