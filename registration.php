<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Student Login</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    
    </head>

    <body>

        <div class="form">
            
            <div class="tab-content"> 
              
                <h1>Welcome Back!</h1>
              
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
          
        </div> <!-- /form -->

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

    </body>

</html>