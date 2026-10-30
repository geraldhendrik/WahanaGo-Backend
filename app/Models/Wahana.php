<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wahana extends Model
{
    protected $fillable = ['nama', 'kategori', 'harga','gambar'];
}