<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Seller extends Model
{
    use HasFactory;
    protected $table = "history_seller";
    protected $primaryKey = "id";
    protected $fillable = [
       'nama jasa', 'seller_id', 'tanggal pembelian', 'harga'];

       public function penjual(){
        return $this->belongsTo(Penjual::class);
    }
}
