<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InputData extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'no_barang',
        'nama_barang',
        'jenis_varian',
        'tanggalKadaluarsa',
        'tanggalProduksi',
        'harga_beli'
    ];
    protected $primarykey = 'barang_id';
    protected $table = 'input_data';
}
