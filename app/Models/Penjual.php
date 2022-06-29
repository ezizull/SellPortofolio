<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = "penjual";
    protected $primaryKey = "id";
    protected $fillable = [
       'first_name', 'middle name', 'last name', 'email', 'password', 'no hp', 'alamat'];

       public function pengguna()
    {
    	return $this->belongsToMany(Pengguna::class);
    }
    
    
       public function portofolio(){
        return $this->hasMany(Portofolio::class);
    }

    public function history_seller(){
        return $this->hasMany(History_Seller::class);
    }
}
