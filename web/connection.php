<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    print_r($url);
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $link = new mysqli($server, $username, $password, $db);

?>