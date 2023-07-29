<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterOffer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function offer(){
        return $this->belongsTo(Offer::class,'service_id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
