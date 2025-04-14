<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';  // Jika nama tabel bukan 'user_models'
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan
}