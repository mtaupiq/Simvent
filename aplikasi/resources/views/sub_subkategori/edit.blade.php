@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{url('kategori')}}">Kategori</a></li>
  <li><a href="{{url('subkategori')}}">SubKategori</a></li>
  <li><a href="{{url('sub_subkategori')}}">Sub SubKategori</a></li>
  <li class="active">{{$edit_sub_subkategori->id}}</li>
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
								<form action="{{ url('sub_subkategori/'.$edit_sub_subkategori->id) }}" method="POST" role="form">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="PUT">
									<div class="form-group">
										<label for="nama_subkategori">Nama SubKategori</label>
										<select name="id_subkategori" class="form-control">
										@foreach($list_subkategori as $id=>$nama)
											<option value="{{$id}}">{{$nama}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="nama_sub_subkategori">Nama SubKategori</label>
										<input name="nama_sub_subkategori" type="text" class="form-control" id="nama_sub_subkategori" value="{{$edit_sub_subkategori->nama_sub_subkategori}}" required>
									</div>
									<div class="form-group">
										<label for="kode_sub_subkategori">Kode SubKategori</label>
										<input name="kode_sub_subkategori" type="text" class="form-control" id="kode_sub_subkategori" value="{{$edit_sub_subkategori->kode_sub_subkategori}}" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Edit</button>
									<a class="btn btn-default" href="{{url('sub_subkategori')}}" role="button">Batal</a>
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
