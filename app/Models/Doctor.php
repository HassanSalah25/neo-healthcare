<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $table = 'doctors';

    public $guarded = [

    ];

    protected $casts = [

    ];

    public static array $rules = [

    ];

    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? '';
    }

    public function service()
    {
        return $this->belongsToMany(Service::class,'doctor_services');
    }

}
