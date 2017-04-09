<!DOCTYPE html>
<html>

    <head>

        <title>Student Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <style>


    </style>

    <body>

        <br>
        <br>
        <h1 style="font-size:60px">Bangladesh University</h1>
        <div class="form">
            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Registration</a></li>
                <li class="tab"><a href="#login">Log In</a></li>
            </ul>
      
	        <div class="tab-content">
		        <div id="signup">   
		          	<h1>Sign Up for Free</h1>
		          
		            <form action="dbreg.php" method="post">
		              
		              	<div class="field-wrap">
		                    <label>
		                        Name<span class="req">*</span>
		                    </label>
		                    <input type="text" name = "name" required autocomplete="off"/>
		                </div>

		                <div class="field-wrap">
		                    <label>
		                        Student ID<span class="req">*</span>
		                    </label>
		                    <input type="text" name = "id" required autocomplete="off"/>
		                </div>

		                <div class="field-wrap">
		                    <label>
		                        Email Address<span class="req">*</span>
		                    </label>
		                    <input type="text" name = "email" required autocomplete="off"/>
		                </div>
		              
		                <div class="field-wrap">
		                    <label>
		                        Set A Password<span class="req">*</span>
		                    </label>
		                    <input type="password" name = "pass" required autocomplete="off"/>
		                </div>
		              
		                <button type="submit" class="button button-block"/>Submit</button>
		              
		            </form>

		    	</div>
	            
		        <div id="login">   
		          	<h1>Welcome Back!</h1>
		          
		            <form action="dblogin.php" method="post">
		              
		                <div class="field-wrap">
		                	<label>
		                  		Student ID<span class="req">*</span>
		                	</label>
		                	<input type="text" name = "id" required autocomplete="off"/>
		              	</div>
		              
		              	<div class="field-wrap">
		                	<label>
		                  		Password<span class="req">*</span>
		                	</label>
		                	<input type="password" name = "pass" required autocomplete="off"/>
		              	</div>
		              
		              	<button class="button button-block"/>Log In</button>
		              
		             </form>

		    	</div>
	            
	    	</div><!-- tab-content -->
      
		</div> <!-- /form -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
   
</body>

</html>