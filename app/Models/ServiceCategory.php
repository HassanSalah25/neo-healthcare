<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? '';
    }

    public function services()
    {
        return $this->hasMany(Service::class,'service_category_id');
    }

}
