<?php
    $connection ="test";
    require "autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;
    
    $apikey='8nHDLi58eHKZJYdQ7cy7e8i1G';
    $apisecret='SjDzYIf2oVfsyYaCGNbGzpZQ6vrhFbWNCCP96jN3VvRndkcboS';
    $accesstoken='3426009135-tObb8S0Gigp5GDNjFwijGlQX53rg7AoleJGO8jQ';
    $accesssecret='502BJeshORJRouCsfJc4GKIkRFGZRfrX0XXP8bUumOAmi';
    
    $connection = new TwitterOAuth($apikey,$apisecret,$accesstoken,$accesssecret);
    echo $connection;
?>