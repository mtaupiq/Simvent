<div class="col-md-8 col-lg-8">
	<div class="panel" style="margin-bottom: 10px;">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">ID</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Kode</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sub_subkategori as $no=>$item)
						<tr>
							<td  style="text-align: center; vertical-align: middle;">{{$no+1}}</td>
							<td  style="text-align: center; vertical-align: middle;">{{$item->id}}</td>
							<td  style="text-align: center; vertical-align: middle;">{{$item->nama_sub_subkategori}}</td>
							<td  style="text-align: center; vertical-align: middle;">{{$item->subkategori->kategori->kode_kategori}}{{$item->subkategori->kode_subkategori}}{{$item->kode_sub_subkategori}}</td>
							<td  style="text-align: center; vertical-align: middle;">
								<form action="{{ url('sub_subkategori/'.$item->id) }}" method="POST" role="form">
									{{ csrf_field() }}
										<a href="{{url('sub_subkategori/'.$item->id)}}" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span><span class="hidden-xs hidden-sm"> Edit</span></a>
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