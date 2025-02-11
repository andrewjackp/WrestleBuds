<?php

namespace App\Models;

use App\Models\Promotion;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wrestler extends Model
{
    use HasFactory;

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
