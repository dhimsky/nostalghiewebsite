@extends('../layouts.main-layout')

@section('title', 'package/prewedding')

<!-- Vendor CSS Files -->
<link href="{{ asset('/') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/vendor/simple-datatables/style.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/css/stylepackage.css" rel="stylesheet">

@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg-5">
            <div>
                <div class="card-body">
                    <img src="{{ asset('/') }}assets/img/categories/prewedding.png" alt="">
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-success" type="button">RESERVATION NOW</button>
                      </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-7">
            <h2 style="font-weight: bold">PREWEDDING PHOTO</h2>
            <br>
            <div>
                <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px">
                        Detail Paket
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>10x Pose</li>
                        <li>10 Edited file Via Whatsapp</li>
                        <li>7 Cetak 4R</li>
                        <li>3 Cetak 4R + 1 Triple Album</li>
                        <li>1 Cetak Laminasi 16RP + Frame Minimalis Putih</li>
                        <li>2 Orang</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px">
                        Harga
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p><strong>Rp. 500.000</strong></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">RESERVASI ONLINE</h5>
        
                <!-- General Form Elements -->
                <form method="POST" action="{{ route('reserv.store')}}">
                  @csrf
                  <div class="col-12">
                    <label for="nama_pemesan">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                </div>
                <div class="col-12">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
                </div>
                <div class="col-12">
                    <label for="harga_paket">Harga Paket</label>
                    <input type="number" class="form-control" id="harga_paket" name="harga_paket" required>
                </div>
                <div class="col-12">
                    <label for="no_hp">No. HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="col-12">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="col-12">
                    <label for="jam">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" required>
                </div>
                <div class="col-12">
                    <label for="jumlah_orang">Jumlah Orang</label>
                    <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang" required>
                </div>
                <div class="col-12">
                    <label for="bukti_boking">Bukti Boking</label>
                    <input type="file" class="form-control-file" id="bukti_boking" name="bukti_boking" required>
                </div>
                <div class="col-12">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form><!-- End General Form Elements -->
        
              </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Vendor JS Files -->
<script src="{{ asset('/') }}assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/vendor/chart.js/chart.umd.js"></script>
<script src="{{ asset('/') }}assets/vendor/echarts/echarts.min.js"></script>
<script src="{{ asset('/') }}assets/vendor/quill/quill.min.js"></script>
<script src="{{ asset('/') }}assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{ asset('/') }}assets/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('/') }}assets/js/mainpackage.js"></script>
