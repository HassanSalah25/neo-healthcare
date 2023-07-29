<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicatant extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function media(){
        return $this->hasOne(media::class,'id','cv_id');
    }

    public function getFile(){
        return $this->media->file_name ?? '';
    }
}
