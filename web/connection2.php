<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = "stevo11850";
    $password = "";
    $database = "sample_db";
    $dbport = 3306;

    // Create connection
    $db = mysqli_connect(getenv('IP'), "stevo11850", "", "sample_db", 3306);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //And now to perform a simple query to make sure it's working
   // $query = "UPDATE users SET username='Ian O\'Neil' WHERE id=31 LIMIT 1";
   // $result = mysqli_query($db, $query);
    $name="Ian O'Neil";
    $query = "SELECT username FROM users WHERE username='".mysqli_real_escape_string($db,$name)."'";
    //  $query="CREATE TABLE users2 (
    //    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      //  name VARCHAR(30) NOT NULL,
        //email VARCHAR(50),
      //  password VARCHAR(50),
    //    reg_date TIMESTAMP
    //        )";
    //    $query="INSERT INTO users2 (name, email, password)
    //VALUES ('Beth','example@example.com','');";
    
    $query="ALTER TABLE users2
ADD diary TEXT";
    if($result=mysqli_query($db,$query)){
        echo mysqli_num_rows($result);
        while($row=mysqli_fetch_array($result)){
            print_r($row);
        }
    }
    else{
        echo "it failed";
    };
    setcookie("id","1234",time() - 1);
    
    session_start();
   // echo $_SESSION['loginID'];
    echo $_COOKIE['id'];
    $salt="ais2ew$";
    echo md5(md5("poop")."cromane");
    
?>