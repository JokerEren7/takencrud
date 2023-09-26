<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taakmodel extends Model
{
    protected $table = 'taakmodels';


    public $timestamps = false;


    protected $fillable = [
        'title', 'description', 'completed',
    ];
}
