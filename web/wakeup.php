<?php function urlExists($url=NULL)  
{  
    if($url == NULL) return false;  
    $ch = curl_init($url);  
};
urlExists("https://stephen-oreilly-test-site.herokuapp.com/");
urlExists("https://twitter-api-oauth.herokuapp.com/");
urlExists("https://smartydemo.herokuapp.com/");

?>