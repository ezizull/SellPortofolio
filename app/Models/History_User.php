<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_User extends Model
{
    use HasFactory;
    protected $table = "history_user";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'user_id', 'nama jasa'];

       public function pengguna(){
        return $this->belongsTo(Pengguna::class);
    }

}
