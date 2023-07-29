<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function  service_category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function  doctor()
    {
        return $this->belongsToMany(Doctor::class,'doctor_services');
    }

    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? '';
    }
}
