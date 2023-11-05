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
                              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                              <input type="text" name="tanggallahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Skill</label>
                              <select class="form-select" name="skill" aria-label="Default select example">
                                <option selected>Silahkan memilih opsi berikut</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Ahli Gizi">Ahli Gizi</option>
                                <option value="Software Developer">Software Developer</option>
                                <option value="Teknisi">Teknisi</option>
                                <option value="Human Management">Human Management</option>
                                <option value="Application Development">Application Development</option>
                                <option value="DLL">Dan Lain-Lain</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Experience</label>
                              <input type="text" name="experience" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth.footer')
    </div>
@endsection
