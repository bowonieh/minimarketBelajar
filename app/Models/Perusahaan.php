<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $fillable = ['npwp','alamat','nama_perusahaan'];
    protected $primaryKey = 'id_perusahaan';
    public $timestamps = false;
}
