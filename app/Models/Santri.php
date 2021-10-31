<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $primaryKey = 'id_Santri';
    protected $fillable = ['id_Santri','nama_santri','jenis_kelamin','tangal_lahir','kota_lahir',
    'nama_ortu','alamat_ortu','no_hp','email','password','tanggal_masuk','aktif'];

}