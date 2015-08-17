<?php
    require "twitteroauth-master/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
    
    $apikey='8nHDLi58eHKZJYdQ7cy7e8i1G';
    $apisecret='SjDzYIf2oVfsyYaCGNbGzpZQ6vrhFbWNCCP96jN3VvRndkcboS';
    $accesstoken='3426009135-tObb8S0Gigp5GDNjFwijGlQX53rg7AoleJGO8jQ';
    $accesssecret='502BJeshORJRouCsfJc4GKIkRFGZRfrX0XXP8bUumOAmi';
    
    $connection = new TwitterOAuth($apikey,$apisecret,$accesstoken,$accesssecret);
    $statuses = $connection->get('statuses/home_timeline',array("count"=>10));
    print_r($statuses);
    foreach($statuses as $tweet){
        echo "test";
        print_r($tweet->id);
        $favourite=$tweet->retweeted_status->favorite_count;
        if($favourite>2){
            $embed=$connection->get('statuses/oembed', array('id'=>$tweet->id));
            print_r($embed);
        }
    }
?>