<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    print_r($url);
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $link = new mysqli($server, $username, $password, $db);
    print_r($conn);
//(...)
if($link == false){
    echo "failed";
    //try to reconnect
}
else{
    echo "connected";
}

  $query="CREATE TABLE users2 (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(50),
        diary TEXT,
        reg_date TIMESTAMP
            )";
    //    $query="INSERT INTO users2 (name, email, password)
    //VALUES ('Beth','example@example.com','');";

    mysqli_query($link,$query);
?>
