@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah Data'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6><h6 style="font-size: 30px;">JOB MANAGEMENT</h6></h6>
                        <h6><h6 style="font-size: 20px;">-TAMBAH DATA-</h6></h6>
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                              <label for="name" class="form-label">Nama Lengkap</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!">
                            </div>
                            <div class="mb-3">
                              <label for="phone" class="form-label">No Handphone</label>
                              <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan No Handphone anda">
                            </div>
                            <div class="mb-3">
                              <label for="qty" class="form-label">Quantity</label>
                              <select class="form-select" name="qty" placeholder="masukan quantity anda">
                                <option selected>Silahkan memilih opsi berikut</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="status" class="form-label">Status Pembayaran</label>
                              <select class="form-select" name="status" placeholder="masukan status anda">
                                <option selected>Silahkan memilih opsi berikut</option>
                                <option value="unpaid">unpaid</option>
                                <option value="paid">paid</option>
                                
                              </select>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth.footer')
    </div>
@endsection
