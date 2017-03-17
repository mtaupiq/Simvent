<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\SubKategori;
use App\SubSubKategori;
use App\Barang;
use App\Unit;

class AplikasiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

	// Halaman Utama
    public function index()
    {
        return view('home');
    }

    // Kategori
    public function index_kategori()
    {
    	$kategori = Kategori::all();
        return view('kategori.index',compact('kategori'));
    }
    public function store_kategori(Request $req)
    {
    	$this->validate($req,[
            'kode_kategori' => 'required|size:2|unique:kategori'
        ]);

    	$kategori = new Kategori;
        $kategori->nama_kategori = $req['nama_kategori'];
        $kategori->kode_kategori = $req['kode_kategori'];
        $kategori->save();
        $req->session()->flash('message', 'Data Kategori berhasil disimpan!');
        return back();
    }
    public function edit_kategori($id_kategori)
    {
    	$edit_kategori = Kategori::findOrFail($id_kategori);
    	$kategori = Kategori::all();
        return view('kategori.edit',compact('edit_kategori','kategori'));
    }
    public function update_kategori(Request $req, $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->nama_kategori = $req['nama_kategori'];
        $kategori->kode_kategori = $req['kode_kategori'];
        $kategori->save();
        $req->session()->flash('message', 'Data Kategori berhasil diubah!');
        return redirect('kategori');
    }
    public function hapus_kategori(Request $req, $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->delete();
        $req->session()->flash('message', 'Data Kategori berhasil dihapus!');
        return back();
    }

    // SubKategori
    public function index_subkategori()
    {
    	$list_kategori = Kategori::pluck('nama_kategori','id');
    	$subkategori = SubKategori::all();
        return  view('subkategori.index',compact('list_kategori','subkategori'));
    }
    public function store_subkategori(Request $req)
    {
    	$this->validate($req,[
            'kode_subkategori' => 'required|size:2|unique:subkategori'
        ]);
    	$subkategori = new SubKategori;
    	$subkategori->id_kategori = $req['id_kategori'];
    	$subkategori->nama_subkategori = $req['nama_subkategori'];
    	$subkategori->kode_subkategori = $req['kode_subkategori'];
    	$subkategori->save();
        $req->session()->flash('message', 'Data SubKategori berhasil disimpan!');
        return back();
    }
    public function edit_subkategori($id_subkategori)
    {
    	$edit_subkategori = SubKategori::findOrFail($id_subkategori);
    	$subkategori = SubKategori::all();
    	$list_kategori = Kategori::pluck('nama_kategori','id');
        return view('subkategori.edit',compact('edit_subkategori','subkategori','list_kategori'));
    }
    public function update_subkategori(Request $req, $id_subkategori)
    {
        $subkategori = SubKategori::findOrFail($id_subkategori);
    	$subkategori->id_kategori = $req['id_kategori'];
        $subkategori->nama_subkategori = $req['nama_subkategori'];
        $subkategori->kode_subkategori = $req['kode_subkategori'];
        $subkategori->save();
        $req->session()->flash('message', 'Data SubKategori berhasil diubah!');
        return redirect('subkategori');
    }
    public function hapus_subkategori(Request $req, $id_subkategori)
    {
        $subkategori = SubKategori::findOrFail($id_subkategori);
        $subkategori->delete();
        $req->session()->flash('message', 'Data SubKategori berhasil dihapus!');
        return back();
    }

    // SubSubKategori
    public function index_sub_subkategori()
    {
    	$list_subkategori = SubKategori::pluck('nama_subkategori','id');
    	$sub_subkategori = SubSubKategori::all();
        return  view('sub_subkategori.index',compact('list_subkategori','sub_subkategori'));
    }
    public function store_sub_subkategori(Request $req)
    {
        $this->validate($req,[
            'kode_sub_subkategori' => 'required|size:2|unique:sub_subkategori'
        ]);
    	$sub_subkategori = new SubSubKategori;
    	$sub_subkategori->id_subkategori = $req['id_subkategori'];
    	$sub_subkategori->nama_sub_subkategori = $req['nama_sub_subkategori'];
    	$sub_subkategori->kode_sub_subkategori = $req['kode_sub_subkategori'];
    	$sub_subkategori->save();
        $req->session()->flash('message', 'Data Sub SubKategori berhasil disimpan!');
        return back();
    }
    public function edit_sub_subkategori($id_sub_subkategori)
    {
    	$edit_sub_subkategori = SubSubKategori::findOrFail($id_sub_subkategori);
    	$sub_subkategori = SubSubKategori::all();
    	$list_subkategori = SubKategori::pluck('nama_subkategori','id');
        return view('sub_subkategori.edit',compact('edit_sub_subkategori','sub_subkategori','list_subkategori'));
    }
    public function update_sub_subkategori(Request $req, $id_sub_subkategori)
    {
        $sub_subkategori = SubSubKategori::findOrFail($id_sub_subkategori);
    	$sub_subkategori->id_subkategori = $req['id_subkategori'];
        $sub_subkategori->nama_sub_subkategori = $req['nama_sub_subkategori'];
        $sub_subkategori->kode_sub_subkategori = $req['kode_sub_subkategori'];
        $sub_subkategori->save();
        $req->session()->flash('message', 'Data Sub SubKategori berhasil diubah!');
        return redirect('sub_subkategori');
    }
    public function hapus_sub_subkategori(Request $req, $id_sub_subkategori)
    {
        $sub_subkategori = SubSubKategori::findOrFail($id_sub_subkategori);
        $sub_subkategori->delete();
        $req->session()->flash('message', 'Data Sub SubKategori berhasil dihapus!');
        return back();
    }

    // Barang
    public function index_barang()
    {
    	$list_sub_subkategori = SubSubKategori::pluck('nama_sub_subkategori','id');
    	$barang = Barang::all();
        return  view('barang.index',compact('list_sub_subkategori','barang'));
    }
    public function store_barang(Request $req)
    {
        $this->validate($req,[
            'kode_barang' => 'required|size:2|unique:barang'
        ]);
    	$barang = new Barang;
    	$barang->id_sub_subkategori = $req['id_sub_subkategori'];
    	$barang->nama_barang = $req['nama_barang'];
    	$barang->kode_barang = $req['kode_barang'];
    	$barang->minimal_cadangan = $req['minimal_cadangan'];
    	$barang->cadangan = $req['cadangan'];
    	$barang->save();
        $req->session()->flash('message', 'Data Barang berhasil disimpan!');
        return back();
    }
    public function edit_barang($id_barang)
    {
    	$edit_barang = Barang::findOrFail($id_barang);
    	$barang = Barang::all();
    	$list_sub_subkategori = SubSubKategori::pluck('nama_sub_subkategori','id');
        return view('barang.edit',compact('edit_barang','barang','list_sub_subkategori'));
    }
    public function update_barang(Request $req, $id_barang)
    {
        $barang = Barang::findOrFail($id_barang);
    	$barang->id_sub_subkategori = $req['id_sub_subkategori'];
        $barang->nama_barang = $req['nama_barang'];
        $barang->kode_barang = $req['kode_barang'];
    	$barang->minimal_cadangan = $req['minimal_cadangan'];
    	$barang->cadangan = $req['cadangan'];
        $barang->save();
        $req->session()->flash('message', 'Data Barang berhasil diubah!');
        return redirect('barang');
    }
    public function hapus_barang(Request $req, $id_barang)
    {
        $barang = Barang::findOrFail($id_barang);
        $barang->delete();
        $req->session()->flash('message', 'Data Barang berhasil dihapus!');
        return back();
    }

    // Unit
    public function index_unit()
    {
    	$unit = unit::all();
        return  view('unit.index',compact('unit'));
    }
    public function store_unit(Request $req)
    {
        $this->validate($req,[
            'nama_unit' => 'required|unique:unit'
        ]);
    	$unit = new Unit;
    	$unit->nama_unit = $req['nama_unit'];
    	$unit->save();
        $req->session()->flash('message', 'Data unit berhasil disimpan!');
        return back();
    }
    public function edit_unit($id_unit)
    {
    	$edit_unit = unit::findOrFail($id_unit);
    	$unit = unit::all();
        return view('unit.edit',compact('edit_unit','unit'));
    }
    public function update_unit(Request $req, $id_unit)
    {
        $unit = unit::findOrFail($id_unit);
        $unit->nama_unit = $req['nama_unit'];
        $unit->save();
        $req->session()->flash('message', 'Data unit berhasil diubah!');
        return redirect('unit');
    }
    public function hapus_unit(Request $req, $id_unit)
    {
        $unit = unit::findOrFail($id_unit);
        $unit->delete();
        $req->session()->flash('message', 'Data unit berhasil dihapus!');
        return back();
    }
}
