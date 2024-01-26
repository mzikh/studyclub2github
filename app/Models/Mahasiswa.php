<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //use HasFactory;
    protected $table = 'table_mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nim','nama','kelas','deskripsi'];
}
