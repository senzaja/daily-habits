<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_habits extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_habit','id_kategori','id_user','deskripsi','status'];
    protected $visible = ['id','nama_habit','id_kategori','id_user','deskripsi','status'];
    public function kategori()
    {
      return $this->belongsTo(kategori::class,'id_kategori');
    }
    public function user()
    {
      return $this->belongsTo(user::class,'id_user');
    }
}
