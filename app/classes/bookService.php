<?php
namespace App\Classes;

use Mail;
use App\UserActivation;
use App\Mail\UserActivationEmail;
use App\User;

class ActivationService
{
    // protected $resendAfter = 24; // Gởi lại mã xác nhận sau 24h
    // protected $userActivation;

    public function __construct(UserActivation $userActivation)
    {
        $this->userActivation = $userActivation;
    }

    public function sendActivationMail($user)
    {
        if ($user->activated || !$this->shouldSend($user)) return;
        $token = $this->userActivation->createActivation($user);
        $user->activation_link = route('user.activate', $token);
        $mailable = new bookEmail($user);
        Mail::to($user->email)->send($mailable);
    }

    

}