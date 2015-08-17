<!doctype html>
<html>
<head>
    <title>Weather Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <style>
        #logo a{
                color:white;
        }
        #logo a:hover{
            color:orange;
        }
       html,body{
           height:100%;
           background-size:100%;
           }
       .container{
           width:100%;
           height:100%;
           background-size:cover;
           background-image:url("https://images.unsplash.com/photo-1433833103303-111110aae192?dpr=2&fit=crop&fm=jpg&h=700&q=80&w=1050");
           background-position:center;
           text-align:center;
           padding-top:150px;
       }
       .white{
           color:white;
       }
       p{
           padding-top:0;
           padding-bottom:0;
       }
       input{
           margin:0;
       }
       button{
           margin-top:20px;
       }
       .alert {
           position:relative;
           display:none;
       }
    </style>
</head>

<body>
    <script> 
        $(function(){
          $("#logo").load("navbar.html"); 
        });
    </script> 

     <div id="logo"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="white center">Weather Forecaster</h1>
                <p class="lead center white">Enter your city below to get a forecast of the weather.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..."/>
                        <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
                        
                    </div>
                </form>
                <div class="alert alert-success success">Success!</div>
                <div class="alert alert-danger fail">Could not find weather data for that city please try again</div>
                <div id="noCity" class="alert alert-danger">Please Enter a City</div>
            
            </div>
        </div>
    </div>
<script>
    $('#findMyWeather').click(function(event){
        event.preventDefault();
        $(".alert").hide();
        
        if($("#city").val()!=""){
            $.get('scraper.php?city='+$("#city").val(), function(data){
                
                if(data=="" || (data.indexOf("Warning") > -1)){
                    $(".success").hide();
                    $(".fail").fadeIn(); 
                }
                else{
                    $(".fail").hide();
                    $(".success").html(data).fadeIn();
                }
            });
        }else{
            $("#noCity").fadeIn(); 
        }
    })
</script> 
</body>
</html>
