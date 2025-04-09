<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   use HasFactory;
   public function user(){
    return $this->belongsTo(User::class);
   }
   protected $fillable=[
'area',
'karamoozi_name',
'karamoozi_address',
'karamoozi_post',
'karfarma',
   ];
}
