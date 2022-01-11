@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data Produk
						<form action="{{url('produk', $produk->id)}}" method="post">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="Nama_produk" value="{{$produk->Nama_produk}}">
                </div>
                    <div class="row ">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="Harga" value="{{$produk->Harga}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="Berat" value="{{$produk->Berat}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="Stok" value="{{$produk->Berat}}">
                                </div>
                        </div>
						<div class="col-md-3">
                                <div class="form-group">
                                        <label for="" class="control-label">Warna</label>
                                        <input type="text" class="form-control" name="warna" value="{{$produk->warna}}">
                                </div>
                        </div>
                    </div>
                                     
                        <div class="form-group">
                                <label for="" class="control-label">deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                                
                        </div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection