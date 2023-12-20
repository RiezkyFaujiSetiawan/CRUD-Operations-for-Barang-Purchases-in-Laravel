@extends('utama')

@section('hasil_inputan')
<!-- partial -->
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hasil Data Inputan</h4>
        
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID Barang</th>
                    <th scope="col">No Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Varian</th>
                    <th scope="col">Tanggal Kadaluarsa</th>
                    <th scope="col">Tanggal Produksi</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
    $rowClasses = ["table-warning", "table-primary", "table-secondary", "table-success", "table-danger", "table-info", "table-light", "table-dark"];
@endphp

@foreach($data_inventory as $index => $inventory)
@php
    // Menggunakan modulus untuk mengambil indeks kelas warna dari array secara bergantian
    $rowClass = $rowClasses[$index % count($rowClasses)];
@endphp

<tr class="{{ $rowClass }}">
    <th scope="row">{{ $inventory->barang_id }}</th>
    <td>{{ $inventory->no_barang }}</td>
    <td>{{ $inventory->nama_barang }}</td>
    <td>{{ $inventory->jenis_varian }}</td>
    <td>{{ $inventory->tanggalKadaluarsa }}</td>
    <td>{{ $inventory->tanggalProduksi }}</td>
    <td>{{ $inventory->harga_beli }}</td>
    <td><button type="button" onclick="window.location.href='{{url('delete/'.$inventory->barang_id)}}';" class="btn btn-danger">Hapus</button>
        <button type="button" onclick="window.location.href='{{url('edit/'.$inventory->barang_id)}}';" class="btn btn-warning">Edit</button>
    </td>
</tr>
@endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<br>
<br>


@endsection