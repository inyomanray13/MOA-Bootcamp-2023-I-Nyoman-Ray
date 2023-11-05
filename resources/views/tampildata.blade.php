
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid py-4">
      <div class="row">
          <div class="col-12">
              <div class="card mb-4">
                  <div class="card-header pb-0">
                      <h6><h6 style="font-size: 30px;">JOB MANAGEMENT</h6></h6>
                      <h6><h6 style="font-size: 20px;">-EDIT DATA-</h6></h6>
                      <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="text" name="tanggallahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tanggallahir }}">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Skill</label>
                            <select class="form-select" name="skill" aria-label="Default select example">
                              <option selected>{{ $data->skill }}</option>
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
                            <input type="text" name="experience" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->experience }}">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
              </div>
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

