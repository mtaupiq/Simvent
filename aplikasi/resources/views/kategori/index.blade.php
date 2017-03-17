@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Kategori</li>
</ol>

<div class="row">
	<div class="col-md-12 col-lg-12">
		@include('alert')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data Kategori</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="panel" style="margin-bottom: 10px;">
							<div class="panel-body">
								<form action="{{ url('kategori') }}" method="POST" role="form">
									{{ csrf_field() }}
									<div class="form-group">
										<label for="nama_kategori">Nama Kategori</label>
										<input name="nama_kategori" type="text" class="form-control" id="nama_kategori" required>
									</div>
									<div class="form-group">
										<label for="kode_kategori">Kode Kategori</label>
										<input name="kode_kategori" type="text" class="form-control" id="kode_kategori" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Simpan</button>
								</form>
							</div>
						</div>
					</div>
					@include('kategori.tabel')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
