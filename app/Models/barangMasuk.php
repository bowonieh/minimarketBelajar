<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuk';
    protected $fillable = ['id_cabang','id_barang','tanggal','jumlah'];
    public $timestamps = false;
    protected $primaryKey = 'id_barang_masuk';
}
