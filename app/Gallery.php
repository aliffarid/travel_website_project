<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'trip_packages_id', 'image'
    ];

    protected $hidden = [

    ];

    public function trip_package(){
        return $this->belongsTo(TripPackage::class, 'trip_packages_id', 'id');
    }

}
