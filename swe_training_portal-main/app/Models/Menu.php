<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Submenu;

class Menu extends Model
{
    use HasFactory;
 
    protected $table = 'menus';

    public function submenu()
    {
        return $this->hasMany('App\Models\SubMenu');
    }


}
