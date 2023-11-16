<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
///use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifications;

class ResetPasswordNotification extends Notifications
{
    use HasFactory;

    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail( $notifiable ) {
        $link = url( "/password/reset/?token=" . $this->token );
     
        return ( new MailMessage )
           ->view('reset.emailer')
           ->from('info@example.com')
           ->subject( 'Reset your password' )
           ->line( "Hey, We've successfully changed the text " )
           ->action( 'Reset Password', $link )
           ->attach('reset.attachment')
           ->line( 'Thank you!' );
     }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
