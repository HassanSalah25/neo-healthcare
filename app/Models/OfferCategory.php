<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? "";
    }

    public function offers()
    {
        return $this->hasMany(Offer::class,'offer_category_id');
    }
}
