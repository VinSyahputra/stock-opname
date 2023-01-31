@extends('layouts.main')
@section('container')
<div class="col-md-6 mx-auto mt-5">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Jenis Barang</h5>
    
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Barang</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $d->jenis_barang }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
        </div>
    </div>
</div>
@endsection