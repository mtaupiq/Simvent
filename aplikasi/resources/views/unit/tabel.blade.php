<div class="col-md-8 col-lg-8">
	<div class="panel" style="margin-bottom: 10px;">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">ID Unit</th>
							<th class="text-center">Nama Unit</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($unit as $no=>$item)
						<tr>
							<td  style="text-align: center; vertical-align: middle;">{{$no+1}}</td>
							<td  style="text-align: center; vertical-align: middle;">{{$item->id}}</td>
							<td  style="text-align: center; vertical-align: middle;">{{$item->nama_unit}}</td>
							<td  style="text-align: center; vertical-align: middle;">
								<form action="{{ url('unit/'.$item->id) }}" method="POST" role="form">
									{{ csrf_field() }}
										<a href="{{url('unit/'.$item->id)}}" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span><span class="hidden-xs hidden-sm"> Edit</span></a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span><span class="hidden-xs hidden-sm"> Hapus</span></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>