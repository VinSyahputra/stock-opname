@extends('layouts.main')
@section('container')
<div class="col-md-10 mx-auto mt-5">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">DataBarang</h5>
    
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $d->nama_barang }}</td>
                    <td>{{ $d->jenis_barang_id }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>{{ $d->jumlah }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>

        {{ $data->links() }}
    
        </div>
    </div>
</div>
@endsection