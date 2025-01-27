<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tractor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'features' ,
        'image' ,
        'text' ,
        'enginetype',
        'ratedengine' ,
        'enginespeed',
        'clutch' ,
        'gears',
        'gearshiftmode',
        'speedrange' ,
        'brake' ,
        'rearpto' ,
        'liftcapacity' ,
        'hydraulic' ,
        'dimensions',
        'wheelbase' ,
        'groundclearance' ,
        'wheeltrack' ,
        'minturningradius',
        'tyre' ,

    ];
}
