<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputData;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_inventory = InputData::all();
        return view('hasilDataInput', compact('data_inventory'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataBarang');
    }

    public function hapus_get($id)
    {
        $proses = InputData::where('barang_id', $id)->delete();
        if ($proses) {
            echo 'data berhasil di hapus';
        }
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $data = [
            'no_barang' => $request->no_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_varian' => $request->jenis_varian,
            'tanggalKadaluarsa' => $request->tanggalKadaluarsa,
            'tanggalProduksi' => $request->tanggalProduksi,
            'harga_beli' => $request->harga_beli,
        ];
        $proses = InputData::create($data);
        return redirect('/hasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_inventory = InputData::where('barang_id', $id)->get();
        return view('editDataBarang', compact('data_inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data = [
            'no_barang' => $request->no_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_varian' => $request->jenis_varian,
            'tanggalKadaluarsa' => $request->tanggalKadaluarsa,
            'tanggalProduksi' => $request->tanggalProduksi,
            'harga_beli' => $request->harga_beli,
        ];
        $data_inventory = InputData::where('barang_id', $id)->update($data);
        return redirect('/hasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proses = InputData::where('barang_id', $id)->delete();
        return redirect('/hasil');
    }
}
