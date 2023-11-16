<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Submenu extends Model
{
    use HasFactory;
    
    protected $table = 'submenus';

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }



}
