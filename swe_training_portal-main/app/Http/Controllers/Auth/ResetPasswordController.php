<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    ////protected $redirectTo = RouteServiceProvider::HOME;


    public function redirectTo(){

        // User role
        //$role = Auth::user()->role->name;
        $user=auth()->user();
        $role=$user->type;
        // Check user role
        switch ($role) {
            case 'user':
                    return '/user-dashboard';
                break;
            case 'admin':
                    return 'home';
                break;
             case 'bay':
                return 'user_dashboard';
            break;
            case 'whef':
                return 'whef_dashboard';
            break;
            case 'super_admin':
                return 'admin_dashboard';
            break;

            default:
                    return '/login';
                break;
        }
    }

}
