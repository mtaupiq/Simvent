@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{url('unit')}}">Unit</a></li>
  <li class="active">{{$edit_unit->id}}</li>
</ol>

<div class="row">
	<div class="col-md-12 col-lg-12">
		@include('alert')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data Unit</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="panel" style="margin-bottom: 10px;">
							<div class="panel-body">
								<form action="{{ url('unit/'.$edit_unit->id) }}" method="POST" role="form">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="PUT">
									<div class="form-group">
										<label for="nama_unit">Nama Unit</label>
										<input name="nama_unit" type="text" class="form-control" id="nama_unit" value="{{$edit_unit->nama_unit}}" required>
									</div>
									<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-saved"></span> Edit</button>
									<a class="btn btn-default" href="{{url('unit')}}" role="button">Batal</a>
								</form>
							</div>
						</div>
					</div>
					@include('unit.tabel')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
