@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Barang</li>
</ol>

<div class="row">
	<div class="col-md-12 col-lg-12">
		@include('alert')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data Barang</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="panel" style="margin-bottom: 10px;">
							<div class="panel-body">
								<form action="{{ url('barang') }}" method="POST" role="form">
									{{ csrf_field() }}
									<div class="form-group">
										<label for="nama_sub_subkategori">Nama Sub SubKategori</label>
										<select name="id_sub_subkategori" class="form-control">
										@foreach($list_sub_subkategori as $id=>$nama)
											<option value="{{$id}}">{{$nama}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="nama_barang">Nama Barang</label>
										<input name="nama_barang" type="text" class="form-control" id="nama_barang" required>
									</div>
									<div class="form-group">
										<label for="kode_barang">Kode Barang</label>
										<input name="kode_barang" type="text" class="form-control" id="kode_barang" required>
									</div>
									<div class="form-group">
										<label for="minimal_cadangan">Minimal Cadangan</label>
										<input name="minimal_cadangan" type="text" class="form-control" id="minimal_cadangan" required>
									</div>
									<div class="form-group">
										<label for="cadangan">Cadangan</label>
										<input name="cadangan" type="text" class="form-control" id="cadangan" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
								</form>
							</div>
						</div>
					</div>
					@include('barang.tabel')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
