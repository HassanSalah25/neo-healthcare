<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? "";
    }

    public function offer_category()
    {
        return $this->belongsTo(OfferCategory::class,'offer_category_id');
    }
}
