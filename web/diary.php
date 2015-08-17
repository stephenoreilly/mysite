<?php include('login.php');?>

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
 <script> 
    $(function(){
      $("#includedContent").load("navbar.html"); 
    });
 </script> 
    
 <body data-spy="scroll" data-target=".navbar-collapse">
    
     <div class="navbar navbar-default navbar-fixed-top">
         <div class="container">
             <div class="navbar-header pull-left">
                 <div id="includedContent"></div>
                 <a class="navbar-brand">Secret Diary</a>
             </div>
         <div class="pull-right">
             <form class="navbar-form navbar-right" method="post">
                 <div class="form-group">
                     <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo $_POST['loginemail'];?>"/>
                     
                 </div>
                 <div class="form-group">
                     <input type="password" name="loginpassword" placeholder="Password" class="form-control" />
                     
                 </div>
                 <input name="submit" type="submit" class="btn btn-success" value="Log In"></input>
             </form>
        
         </div>
         </div>
     </div>
     

 <div class="container contentContainer" id="topContainer">

     <div class="row">
    
         <div class="col-md-6 col-md-offset-3" id="topRow">
            <h1 class="marginTop">Secret Diary</h1>
             <p class="lead">Your own private diary, with you wherever you go</p>
             <?php if($error){
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    if($message){
                        echo "<div class='alert alert-success'>$message</div>";
                    }
                ?>
             <h2 class="marginTop">Interested? Sign Up Below!</h2>
             <form class="marginTop" method="post">
                 
                 <div class="form-group">
                     <label for="email">
                         Email Address
                     </label>
                     <input type="email" name="email" class="form-control" placeholder="Enter email address" value="<?php echo $_POST['email'];?>"/>
                     
                     
                 </div>
                 <div class="form-group">
                     <label for="password">
                         Password
                     </label>
                     <input type="password" name="password" class="form-control" placeholder="Enter password"/>
                     
                     
                 </div>
                 <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
             </form>
            
        
        
         </div>
    
    
     </div>

 </div>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
    jquery.min.js"></script>
    
 </body>
</html>