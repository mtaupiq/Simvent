@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{url('kategori')}}">Kategori</a></li>
  <li class="active">SubKategori</li>
</ol>

<div class="row">
	<div class="col-md-12 col-lg-12">
		@include('alert')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data SubKategori</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="panel" style="margin-bottom: 10px;">
							<div class="panel-body">
								<form action="{{ url('subkategori') }}" method="POST" role="form">
									{{ csrf_field() }}
									<div class="form-group">
										<label for="nama_kategori">Nama Kategori</label>
										<select name="id_kategori" class="form-control">
										@foreach($list_kategori as $id=>$nama)
											<option value="{{$id}}">{{$nama}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="nama_subkategori">Nama SubKategori</label>
										<input name="nama_subkategori" type="text" class="form-control" id="nama_subkategori" required>
									</div>
									<div class="form-group">
										<label for="kode_subkategori">Kode SubKategori</label>
										<input name="kode_subkategori" type="text" class="form-control" id="kode_subkategori" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
								</form>
							</div>
						</div>
					</div>
					@include('subkategori.tabel')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
