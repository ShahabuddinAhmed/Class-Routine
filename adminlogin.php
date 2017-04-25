<?php 
	include('dbadminlogin.php');
    if(isset($_SESSION['login_admin']))
    {
        header('location:updateindex.php');
    }
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Admin Login</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    
    </head>

    <body>

        <div id="main">
            <div id="login">
                <div class="form">
                    
                    <div class="tab-content"> 
                      
                        <h1>Welcome Back!</h1>
                      
                        <form action="" method="post">
                              
                            <div class="field-wrap">
                                    <label>
                                        Admin ID<span class="req">*</span>
                                    </label>
                                <input type="text" name = "id" required autocomplete="off"/>
                            </div>
                          
                            <div class="field-wrap">
                                <label>
                                    Password<span class="req">*</span>
                                </label>
                                <input type="password" name = "pass" required autocomplete="off"/>
                            </div>
                          
                            <button name="submit" id="login" class="button button-block"/>Log In</button>
                         </form>
                    </div>
                </div> <!-- /form -->
            </div>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

    </body>

</html>