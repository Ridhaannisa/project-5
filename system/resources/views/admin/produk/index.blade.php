@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Data Produk
					<a href="{{url('admin/produk/create')}}" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama Produk</th>
								<th>Harga Produk</th>
								<th>Deskripsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
									  <a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i></a>
									  <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									  @include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>Rp. {{number_format($produk->harga)}}</td>
								<td>{{$produk->deskripsi}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection