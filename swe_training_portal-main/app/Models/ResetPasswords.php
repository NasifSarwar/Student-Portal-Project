<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPasswords extends Model
{
    use HasFactory;

    public function showResetForm(Request $request,$token=null)
    {
         return view('auth.passwords.example')->with(

            ['token'=>$token,'email'=>$request->email]

         );

    }
}
