<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paket Trip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <h1 style="font-size: 50px; text-align:center">PAKET TRIP</h1>
    <div style="display:flex;flex-direction: row; margin-top:50px; margin-left:40px;">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/musamus.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Trip 1</h5>
              <p class="card-text">0KM Indonesia dan Papua Nugini adalah titik awal zona waktu Indonesia Timur di Pulau Papua, menandai perbatasan darat antara kedua negara tetangga ini.</p>
              <p class="card-text">Benefit : Perbatasan RI-PNG + Oleh-oleh khas merauke + Snack + Keliling Kota Merauke</p>
              <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Mau Pesan Berapa Orang?</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="jumlah yang dipesan">
                  </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!">
                  </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan no hp!">
                  </div>
                  <div class="mb-3">
                    <label for="adress" class="form-label">Custom Request</label>
                    <textarea name="adress" class="form-control" id="adress" rows="3"></textarea>
                  </div>

              <button class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/musamus2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Trip 2</h5>
              <p class="card-text">Taman Nasional Wasur di Merauke, Papua, dikenal sebagai surga keanekaragaman hayati dan habitat burung migran.</p>
              <p class="card-text">Benefit : Taman Nasional Wasur di Merauke + Oleh-oleh khas merauke</p>
              <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Mau Pesan Berapa Orang?</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="jumlah yang dipesan">
                  </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!">
                  </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan no hp!">
                  </div>
                  <div class="mb-3">
                    <label for="adress" class="form-label">Custom Request</label>
                    <textarea name="adress" class="form-control" id="adress" rows="3"></textarea>
                  </div>

              <button class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/musamus3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Trip 3</h5>
              <p class="card-text">Pantai Onggaya di Merauke: Pasir putih, air jernih, pesona alam Papua.</p>
              <p class="card-text">Benefit : Pantai Onggaya + Keliling Kota Merauke</p>
              <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Mau Pesan Berapa Orang?</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="jumlah yang dipesan">
                  </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!">
                  </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan no hp!">
                  </div>
                  <div class="mb-3">
                    <label for="adress" class="form-label">Custom Request</label>
                    <textarea name="adress" class="form-control" id="adress" rows="3"></textarea>
                  </div>

              <button class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>