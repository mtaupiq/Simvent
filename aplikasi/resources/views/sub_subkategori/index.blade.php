@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{url('kategori')}}">Kategori</a></li>
  <li><a href="{{url('subkategori')}}">SubKategori</a></li>
  <li class="active">Sub SubKategori</li>
</ol>

<div class="row">
	<div class="col-md-12 col-lg-12">
		@include('alert')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data Sub SubKategori</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="panel" style="margin-bottom: 10px;">
							<div class="panel-body">
								<form action="{{ url('sub_subkategori') }}" method="POST" role="form">
									{{ csrf_field() }}
									<div class="form-group">
										<label for="nama_subkategori">Nama SubKategori</label>
										<select name="id_subkategori" class="form-control">
										@foreach($list_subkategori as $id=>$nama)
											<option value="{{$id}}">{{$nama}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="nama_sub_subkategori">Nama Sub SubKategori</label>
										<input name="nama_sub_subkategori" type="text" class="form-control" id="nama_sub_subkategori" required>
									</div>
									<div class="form-group">
										<label for="kode_sub_subkategori">Kode Sub SubKategori</label>
										<input name="kode_sub_subkategori" type="text" class="form-control" id="kode_sub_subkategori" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
								</form>
							</div>
						</div>
					</div>
					@include('sub_subkategori.tabel')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
