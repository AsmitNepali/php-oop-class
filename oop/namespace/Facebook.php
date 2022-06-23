<?php
namespace socialmedia;
require 'SocialMedia.php';
use socialmedia\Socialmedia;

class Facebook
{
    public function displayLoginStatus() {
        echo (new SocialMedia())->login();
    }
}
$fb = new Facebook();
$fb->displayLoginStatus();