<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Sends the password reset notification.
     *
     * @param  string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPassword($token));
    }
}

class CustomPassword extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('পাসওয়ার্ড রিসেট করতে নিচের লিংক এ ক্লিক করুন ')
            ->action('Reset Password', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('পাসওয়ার্ড না পরিবর্তন করতে চাইলে আর কোনো কার্যক্রমের প্রয়োজনীয়তা নেই,আমাদের সাথে থাকার জন্য ধন্যবাদ ');
    }
}