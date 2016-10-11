<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $dir='/images/';
    protected $fillable=[
        'file',
    ];

    public function getFileAttribute($file){
    return $this->dir.$file;
}
    
}
