<?php
namespace App;

use Illuminate\Support\Facades\Mail;

class PostCardSendingService{
   public $country;
   public $width;
   public $height;

    public function __construct($country, $width, $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($messsage, $email){

        // Mail::raw($messsage, function($messsage) use ($email){
        //     $messsage->to($email);
        // });
        dump($messsage, $email);
    }
    
}