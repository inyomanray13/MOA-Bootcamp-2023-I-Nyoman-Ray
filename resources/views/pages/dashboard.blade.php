@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'FINAL PROJEK'])
    <div class="container-fluid py-4">
        <h1 style="font-size: 50px; text-align:center">PAKET TRIP</h1>
        <div style="display:flex;flex-direction: row; margin-top:50px; margin-left:40px;">
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/musamus.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PAKET GOLD</h5>
                  <p class="card-text">0KM Indonesia dan Papua Nugini adalah titik awal zona waktu Indonesia Timur di Pulau Papua, menandai perbatasan darat antara kedua negara tetangga ini.</p>
                  <p class="card-text">Benefit : Perbatasan RI-PNG + Oleh-oleh khas merauke + Snack + Keliling Kota Merauke</p>
                  <p class="card-text">Rp. 100.000,00/Orang</p>
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
                  <h5 class="card-title">PAKET SILVER</h5>
                  <p class="card-text">Taman Nasional Wasur di Merauke, Papua, dikenal sebagai surga keanekaragaman hayati dan habitat burung migran.</p>
                  <p class="card-text">Benefit : Taman Nasional Wasur di Merauke + Oleh-oleh khas merauke</p>
                  <p class="card-text">Rp. 100.000,00/Orang</p>
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
                  <h5 class="card-title">PAKET BRONZE</h5>
                  <p class="card-text">Pantai Onggaya di Merauke: Pasir putih, air jernih, pesona alam Papua.</p>
                  <p class="card-text">Benefit : Pantai Onggaya + Keliling Kota Merauke</p>
                  <p class="card-text">Rp. 100.000,00/Orang</p>
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
        
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
