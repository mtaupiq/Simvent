<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kategori', 50);
            $table->string('kode_kategori');
            $table->timestamps();
        });
        Schema::create('subkategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_subkategori', 50);
            $table->string('kode_subkategori');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('sub_subkategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_subkategori')->unsigned();
            $table->string('nama_sub_subkategori', 50);
            $table->string('kode_sub_subkategori');
            $table->timestamps();

            $table->foreign('id_subkategori')->references('id')->on('subkategori')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sub_subkategori')->unsigned();
            $table->string('nama_barang', 50);
            $table->string('kode_barang');
            $table->integer('minimal_cadangan');
            $table->integer('cadangan');
            $table->timestamps();

            $table->foreign('id_sub_subkategori')->references('id')->on('sub_subkategori')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_pembelian');
            $table->integer('id_barang')->unsigned();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('distribusi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned();
            $table->date('tgl_distribusi');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_unit', 50);
            $table->timestamps();
        });
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_unit')->unsigned();
            $table->date('tgl_pengajuan');
            $table->string('nama_pengajuan', 50);
            $table->integer('niy');
            $table->string('jabatan', 50);
            $table->timestamps();

            $table->foreign('id_unit')->references('id')->on('unit')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('detail_pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengajuan')->unsigned();
            $table->integer('id_barang')->unsigned();
            $table->integer('qty');
            $table->string('brand', 50);
            $table->string('note');
            $table->timestamps();

            $table->foreign('id_pengajuan')->references('id')->on('pengajuan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('subkategori');
        Schema::dropIfExists('sub_subkategori');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('pembelian');
        Schema::dropIfExists('distribusi');
        Schema::dropIfExists('detail_pengajuan');
        Schema::dropIfExists('pengajuan');
        Schema::dropIfExists('unit');
    }
}
