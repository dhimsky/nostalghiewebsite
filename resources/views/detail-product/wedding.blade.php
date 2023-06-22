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
            <h2 style="font-weight: bold">WEDDING PHOTO</h2>
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
                        <p><strong>Rp. 250.000</strong></p>
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
                <form>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label"><strong>Nama</strong></label>
                        <input type="text" class="form-control" id="inputNanme4">
                      </div>
                     
                      <div class="col-12">
                        <label for="inputWa" class="form-label"><strong>No. Hp</strong></label>
                        <input type="text" class="form-control" id="inputWa">
                      </div>
                    
                      <div class="col-12">
                        <label for="inputDate" class="form-label"><strong>Tanggal</strong></label>
                        <input type="date" class="form-control" id="inputDate">
                      </div>
                      
                      <div class="col-12">
                        <label for="inputTime" class="form-label"><strong>Jam</strong></label>
                        <input type="time" class="form-control" id="inputTime">
                      </div>

                      <div class="col-12">
                        <label for="inputTime" class="form-label"><strong>Jumlah Orang</strong></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                      </div>

                      <div class="col-12">
                        <label for="inputText" class="form-label"><strong>Keterangan</strong></label>
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>

                  
        
                  
        
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
