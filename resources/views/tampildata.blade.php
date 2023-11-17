
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
                      <form action="{{ route ('tampilkandata') $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Lengkap</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!" value="$data->name">
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label">No Handphone</label>
                          <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan No Handphone anda" value="$data->phone">
                        </div>
                        <div class="mb-3">
                          <label for="qty" class="form-label">Quantity</label>
                          <select class="form-select" name="qty" placeholder="masukan quantity anda" value="$data->qty">
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
                          <select class="form-select" name="status" placeholder="masukan status anda" value="$data->status">
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
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

