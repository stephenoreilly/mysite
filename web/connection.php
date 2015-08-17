<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    print_r($url);
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $conn = new mysqli($server, $username, $password, $db);
    $conn = mysql_connect('localhost','username','password');
    print_r($conn);
//(...)
if($conn == false){
    echo "failed";
    //try to reconnect
}
else{
    echo "connected";
}
?>