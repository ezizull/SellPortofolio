<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = "pengguna";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'username', 'email', 'password'];

       public function penjual()
       {
           return $this->belongsToMany(Penjual::class);
       }

        public function history(){
            return $this->hasMany(History_User::class);
        }

    

}
