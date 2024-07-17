<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_profile extends Model
{
    use HasFactory;
    protected $fillable = ['id','username','id_user','image','track_record'];
    protected $visible = ['id','username','id_user','image','track_record'];
  public function user()
  {
    return $this->belongsTo(user::class,'id_user');
  }
}
