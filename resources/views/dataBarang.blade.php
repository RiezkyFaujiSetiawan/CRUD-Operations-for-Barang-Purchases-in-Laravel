@extends('utama')

@section('form_inputan')
    {{-- Untuk menampilkan form inputan {{$isi_data}} --}}
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">FORM PEMBELIAN BARANG</h4>
                  <p class="card-description">
                    Masukan Inputan
                  </p>
                  <form class="forms-sample" action="\store" method="post">
                   
                        @csrf
                    <div class="form-group">
                      <label for="no_barang">No Barang</label>
                      <input type="number" class="form-control" id="exampleInputNoBarang" placeholder="Masukan Nomer Barang" name="no_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputNamaBarang" placeholder="Masukan Nama Barang" name="nama_barang">
                      </div>
                      <div class="form-group">
                        <label for="jenis_varian">Jenis Varian</label>
                        <input type="text" class="form-control" id="exampleInputJenisVarian" placeholder="Masukan Jenis Varian" name="jenis_varian">
                      </div>
                      <div class="form-group">
                        <label for="tanggalKadaluarsa">Tanggal Kadaluarsa</label>
                        <input type="date" class="form-control" id="exampleInputTanggalKadaluarsa" placeholder="dd/mm/yyyy" name="tanggalKadaluarsa">
                      </div>
                      <div class="form-group">
                        <label for="tanggalProduksi">Tanggal Produksi</label>
                        <input type="date" class="form-control" id="exampleInputTanggalProduksi" placeholder="dd/mm/yyyy" name="tanggalProduksi">
                      </div>
                      <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control" id="exampleInputHargaBeli" placeholder="Harga Beli" name="harga_beli">
                      </div>
                    
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <br>
            <br>
    
@endsection

