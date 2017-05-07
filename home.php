<!DOCTYPE html>
<html>

    <head>
        <title>Class Routine</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="search/search.css">
    </head>

    <style>
    

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: rgba(0,0,0,0.1);
            background: url("picture/ttt.PNG") fixed center;
            background-size: cover;

        }
        div.home
        {
            letter-spacing: 4px;
            text-align: center;
            text-shadow: 9px;
            font-size: 25px;
            color: #DC143C;
        }

        a
        {
            text-decoration: none;
        }

        nav ul
        {
            margin: 0;
            color: white;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
            text-align: none;
        }
        li.Rig
        {
            float: right;
        }

        nav ul li
        {
            display: inline-block;
            color: white;
            padding: 20px
        }

        nav ul li:hover
        {
            background-color: #111;
        }

        h2
        {
            background-color: rgba(0,0,0,0.7);
        }
        
        .field-wrap
        {
            position: relative;
            margin-bottom: 40px;
        }

        div.Right
        {
            width: 35%;
            float: center;
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        .row.content {height: 950px}

   
        footer{
            width: 100%;
            padding: 5px;
            color: white;
            text-align: center;
            background-color: rgba(0,0,0,.7);
        }


        a:hover
        {
            background-color: #111;
        }


        li:last-child
        {
            border-bottom: none;
        }
        div.text
        {
            padding-right: 100px;
            padding-top: 75px;
            padding-left: 100px;
            padding-bottom: 25px;
            text-align: justify;
            color: rgba(1,1,1,1);
            font-size: 20px;
        }

        @media screen and (max-width: 700px) {

            
            nav ul li{
                box-sizing: border-box;
                width: 100%;
                padding: 15px;
                text-align: center;

            }
            .handle
            {
                display: block;
            }
        }

    </style>

    <body>
        
        <nav>

            <ul>
                <a  href="home.php"><li> Home </li></a>
                <a  href="loginn.php"><li class="Rig">Student Login</li></a>
                <a  href="adminlogin.php"><li class="Rig">Admin Login</li></a>
                <a  href="registration.php"><li class="Rig">Registration</li></a>
            </ul>
            
        </nav>


        <div class="home">
            <br>
            WELCOME TO BANGLADESH UNIVERSITY
        </div>

        <div class="text">
            Bangladesh University (BU) started its journey in 2001. Since then it has been providing quality higher education at a minimum cost especially for the financially underprivileged. For more than a decade, BU has been increasing and nurturing talent within the youth with modern knowledge and technology. With the international affiliations, BU aims at making its students capable and ethical leaders to lead and represent our nation around the world.
            <br>
            Under the Private University Act (1992), BU has been approved by the Government of the People's Republic of Bangladesh. The University maintains close collaboration with the University Grants Commission (UGC) including several American, British, Netherlands and other universities across the globe with its noble vision and mission since 2001. Bangladesh University strives to attain perfection in its efforts to educate the youth of Bangladesh.
        </div>
        <div class="footer navbar-fixed-bottom">
            <footer>
                <h3> All Rights Reserved By</h3>
                <h4> Bangladesh University</h4>
            </footer>
        </div>
    </body>

</html>