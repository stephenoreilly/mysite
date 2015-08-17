<!doctype html>
<html>
<head>
    <title>Stephen O'Reilly</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <style>
    	.navbar-brand{
    		font-size: 1.8em;
    	}
    	#topContainer{
    	    
    		background-image:url("home3.jpg");
    		background-size:cover;
    		width:100%;
    		margin:0;
    		padding:0;
    	}
    	.contentContainer{
    		margin:0;
    		padding:0;
    	}
    	.navbar{
    	    margin:0;
    	}
    	.topRow{
    	    margin-top:100px;
    	    text-align: center;
    	}
    	.topRow h1{
    	    font-size:300%;
    	}
    	.center{
    	    text-align:center;
    	}
    	.title{
    	    margin-top:80px;
    	    font-size:300%;
    	}
    	.project{
    	    margin:20px;
    	}
    </style>
</head>

<body>
    <script> 
    $(function(){
      $("#includedContent").load("navbar.html"); 
    });
    </script> 
    <div class="navbar navbar-default" >
    	<div class="container">
    		
    		<div id="includedContent"></div>
    	</div>
    </div>
   	
   	<div class="contentContainer" id="topContainer">
   	    <div class="row">
   	        <div class="topRow col-md-6 col-md-offset-3">
   	            <h1>Welcome</h1>
   	            <h2 class="lead">Scroll down to take a look a some of my recent projects</h2>
   	            <h3 class="lead">I have been learing different web technologies and am currently looking for a job as a web developer</h3>
   	        </div>
   	    </div>
   		
   	</div>
   	<div class="container contentContainer">
   	    <div class="row center">
   	        <h1 class="center title">Projects</h1>
   	    </div>
   	    <div class="row project">
   	        <div class="col-md-4">
   	            <h2>
   	                Recipes Website
   	            </h2>
   	            <p>
   	                Created using Ruby on Rails and Bootstrap. This site allows users to login, create recipes and upload photos.
   	                <br/>Users can like other users recipes.
   	                <br/>Serveal Ruby Gems have been used. Including bcrypt for password authentication, bootstrap for css styling and.
   	                <br/>I have made use of the model view controller arcitecture and written Unit tests.
   	            </p>
   	            <button onclick="location.href = 'https://stephen-oreilly-test-site.herokuapp.com/';" class="btn btn-success">Check it out!</button>
   	        </div>
   	        <div class="col-md-4">
   	            <h2>
   	                Postcode Finder
   	            </h2>
   	            <p>
   	                This site allows the user to find a postcode based on the address they provide. 
   	                Created using JavaScript the user inputs an address which is used to query Google Maps API. 
   	                The XML returned is parsed and the postcode returned to the user.
   	                AJAX allows the postcode to be displayed without refreshing the page.
   	            </p>
   	            <button onclick="location.href = '/php-projects/postcodefinder.html';" class="btn btn-success">Check it out!</button>
   	        </div>
   	        <div class="col-md-4">
   	            <h2>
   	                Weather Forecaster
   	            </h2>
   	            <p>
   	                The user enters a city and the 3 day wether forecast for that city is returned.
   	                Created using PHP and Javascript a query is made using a GET reguest appended to the URL for http://www.weather-forecast.com/
   	                By scraping the HTML content returned using Regex a 3 day forecast is provided to the user.
   	                AJAX allows the weather forecast to be displayed without refreshing the page.
   	            </p>
   	            <button class="btn btn-success" onclick="location.href = 'php-projects/weatherforecaster/weather-forecaster.php';" >Check it out!</button>
   	        </div>
   	    </div>
   	    <div class="row project">
   	        <div class="col-md-4">
   	            <h2>
   	                My Secret Diary
   	            </h2>
   	            <p>
   	                This site allows users to sign up and make entries to their diary.
   	                The authentication is done using PHP and the users details are encrypted using the hash encryption md5.
   	                Their details are then stored in a MySQL database.
   	                The user's diary entries are stored in the database as they type using AJAX.
   	            </p>
   	            <button class="btn btn-success" onclick="location.href = 'php-projects/diary/index.php';">Check it out!</button>
   	        </div>
   	        <div class="col-md-4">
   	            <h2>
   	                CodePlayer: A basic IDE
   	            </h2>
   	            <p>
   	                This is a code editor where the user can enter HTML/CSS and JS and click the run button to display the results of their code.
   	                This is created using JQuery. Elements are updated as the user enters code and the results are updated to the iframe when the Run button is clicked.
   	            </p>
   	            <button class="btn btn-success" onclick="location.href = 'css-js-and-jquery-projects/JQuery/codeplayer.html';">Check it out!</button>
   	        </div>
       
           <div class="col-md-4">
               <h2>
                   Reaction Tester
               </h2>
               <p>
                   This game tests the users reactions. Circles and squares appear on screen and the user must click on then as quickly as they can.
                   Created using JavaScript boxs and cirlces are randomally created on the fly and given a random background color
                   A new box is created after the user clicks on the shape and a wait time has passed.
                   The reaction time is displayed to the user.
               </p>
               <button onclick="location.href = 'css-js-and-jquery-projects/JS/reaction_tester.html';" class="btn btn-success">Check it out!</button>
           </div>
   	    </div>
   	</div>
<script>
   $(".contentContainer").css("min-height",$(window).height()-50);
</script> 
</body>
</html>
