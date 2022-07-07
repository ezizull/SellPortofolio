<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'seller_id', 'user_id', 'nama jasa', 'tanggal pembelian', 'deadline', 'deskripsi', 'status', 'harga', ''];


}
