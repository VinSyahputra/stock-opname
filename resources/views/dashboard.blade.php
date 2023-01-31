@extends('layouts.main')
@section('container')
    <div class="col-lg-8">
        <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                              <div class="card-body">
                                <h5 class="card-title">Total <span>| Jenis Barang</span></h5>
              
                                <div class="d-flex align-items-center">
                                  <div class="ps-3">
                                    <h3>{{ $jenisbarang }}</h3>
                                  </div>
                                </div>
                              </div>
              
                            </div>
                          </div><!-- End Sales Card -->
              
                          <!-- Revenue Card -->
                          <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                              <div class="card-body">
                                <h5 class="card-title">Total <span>| Barang Stock</span></h5>
              
                                <div class="d-flex align-items-center">
                                  <div class="ps-3">
                                    <h3>{{ $data }}</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Revenue Card -->
        </div>
    </div>
@endsection