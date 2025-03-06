<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Promotion;
use App\Models\Wrestler;

class Bout extends Model
{
   use HasFactory;

   public function wrestlers()
   {
      return $this->belongsToMany(
         Wrestler::class, 'bout_wrestlers'
      );
   }

   public function promotion()
   {
      return $this->belongsTo(
         Promotion::class);
   }
   
}
