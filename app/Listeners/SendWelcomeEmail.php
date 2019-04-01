<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $data = array('name' => $event->user->name, 'email' => $event->user->email, 'body' => 'Welcome to our website. This is meeeee learning about events, listeners and mail sending.');//here we defined the users name, email address and the message that will be sent to the user.

        Mail::send('emails.mail', $data, function($message) use($data) {//you need to create a mail.blade.php template in the views/emails folder

            $message->to($data['email'])->subject('Welcome to the BLOG project');
            $message->from('blog@gmail.com');
        });
    }
}
