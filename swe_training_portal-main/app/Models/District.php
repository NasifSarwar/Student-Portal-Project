<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ambassador;

class District extends Model
{
    use HasFactory;


    protected $table = 'districts';

    public function ambassador()
    {
        return $this->hasMany('App\Models\Ambassador');
    }
}
