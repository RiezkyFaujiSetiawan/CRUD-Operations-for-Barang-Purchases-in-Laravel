@extends('utama')

@section('form_edit')
    {{-- ini menampilkan form inputan {{$isi_data}} --}}
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Barang yang telah di inputkan sebelumnya</h4>
                  <p class="card-description">
                    Silahkan Edit Data Barang
                  </p>
                  <form class="forms-sample" action="{{ url('update') . '/' . $data_inventory[0]->barang_id }}" method="post">
                   
                    @csrf
                  
                    <div class="form-group">
                      <label for="no_barang">No Barang</label>
                      <input type="number" class="form-control" id="exampleInputNoBarang" placeholder="Masukan Nomer Barang" name="no_barang" value="{{$data_inventory[0]->kode_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputNamaBarang" placeholder="Masukan Nama Barang" name="nama_barang" value="{{$data_inventory[0]->nama_barang}}">
                      </div>
                      <div class="form-group">
                        <label for="jenis_varian">Jenis Varian</label>
                        <input type="text" class="form-control" id="exampleInputJenisVarian" placeholder="Masukan Jenis Varian" name="jenis_varian" value="{{$data_inventory[0]->jenis_varian}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggalKadaluarsa">Tanggal Kadaluarsa</label>
                        <input type="date" class="form-control" id="exampleInputTanggalKadaluarsa" placeholder="dd/mm/yyyy" name="tanggalKadaluarsa" value="{{$data_inventory[0]->tanggalKadaluarsa}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggalProduksi">Tanggal Produksi</label>
                        <input type="date" class="form-control" id="exampleInputTanggalProduksi" placeholder="dd/mm/yyyy" name="tanggalProduksi" value="{{$data_inventory[0]->tanggalProduksi}}">
                      </div>
                      <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control" id="exampleInputHargaJual" placeholder="Harga Beli" name="harga_beli" value="{{$data_inventory[0]->harga_beli}}">
                      </div>
                    
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update Data</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <br>
            <br>
    
@endsection

