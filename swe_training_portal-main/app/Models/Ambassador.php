<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class Ambassador extends Model
{
    use HasFactory;

    protected $table = 'ambassadors';

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }
}
