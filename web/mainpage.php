<?php
    session_start();
    include("connection.php");
    $sessionid=$_SESSION['id'];
    $query="SELECT diary FROM users2 WHERE id=$sessionid LIMIT 1;";
    $result=mysqli_query($link,$query);
    $row= mysqli_fetch_array($result);
    $diary=$row['diary'];
    if(!$_SESSION['id']) {
       header("Location:diary.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Secret Diary</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
 <style>
    
     .navbar-brand {
     font-size:1.8em;
     }
    
     #topContainer {
     background-image:url("background.jpg");
     height:400px;
     width:100%;
     background-size:cover;
     }
    
     #topRow {
     margin-top:80px;
     text-align:center;
     }
    
     #topRow h1 {
     font-size:300%;
     }
    
     #emailSignup {
     margin-top:50px;
     }
    
     .bold {
     font-weight:bold;
     }
    
     .marginTop {
     margin-top:30px;
     }
    
     .center {
     text-align:center;
     }
    
     .title {
     margin-top:100px;
     font-size:300%;
     }
    
     #footer {
     background-color:#B0D1FB;
     padding-top:70px;
     width:100%;
     }
    
     .marginBottom {
     margin-bottom:30px;
     }
     .appstoreImage {
     width:250px;
     }
 </style>
 </head>
 <body data-spy="scroll" data-target=".navbar-collapse">
    
     <div class="navbar navbar-default navbar-fixed-top">
         <div class="container">
             <div class="navbar-header pull-left">
                 <a class="navbar-brand">Secret Diary</a>
             </div>
        
         <div class="pull-right">
             <ul class="navbar-nav nav">
                 
                 <li><input class="logout btn btn-default" type="submit" value="Log Out"></input></li>
             </ul>
         </div>
         </div>
     </div>
     

 <div class="container contentContainer" id="topContainer">

     <div class="row">
    
         <div class="col-md-6 col-md-offset-3" id="topRow">
            <textarea class="form-control"><?php echo $diary; ?></textarea>
            
        
        
         </div>
    
    
     </div>

 </div>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
        jquery.min.js"></script>
    <script>
        $(".contentContainer").css("min-height",$(window).height());
        $("textarea").css("min-height",$(window).height()-110);
        $("textarea").keyup(function(){
            
            $.post("updatediary.php",{diary: $("textarea").val()});
        });
        $(".logout").click(function(){
            
            window.location="diary.php?logout=1";
        })
    </script>
        
</body>
</html>