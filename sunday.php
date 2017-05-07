<?php
    session_start();
    if(!isset($_SESSION['login_user']))
    {
        header("location:home.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Class Routine</title>
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
        div cls
        {
            text-align: center;
        }
       body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
            background-size: cover;

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
        li.lef
        {
            float: left;
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

        h2 dept
        {

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
            text-decoration: none;
        }
        th
        {
            text-align: center;
        }


        li:last-child
        {
            border-bottom: none;
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
        }        body
        {
            text-align: center;
        }
        table
        {
            border: 2px solid blue;
        }
        a
        {
            text-decoration: none;
            color: black;
        }
    </style>

    <body>
        <nav>

            <ul>
                <a  href="home.php"><li class="lef">  Home </li></a>
                <a  href="logout.php"><li class="Rig">Logout</li></a>
            </ul>
            
        </nav>
        <h1 style="text-align:center;"><b>BANGLADESH UNIVERSITY</b></h1>
           <h2 style="text-align:center;">Department:Computer Science and Engineering</h2>
             <h3 style="text-align:center;">Class Routine Schedule</h3>
             <h3 style="text-align:center;">Routine for Sunday</h3>
               <h4 >
               <a href="index.php">Saturday</a>
               <a href="sunday.php">Sunday</a>
               <a href="monday.php">Monday</a>
               <a href="tuesday.php">Tuesday</a>
               <a href="wednesday.php">Wednesday</a>
               <a href="thusday.php">Thursday</a>
            </h4>

          
    <table border="2" align="center">


        <tr style="background-color:#00FFFF;">
            <th><b>Room No</b></th>
            <th>9.00-10.30 AM</th>
            <th>10.30-12.00 PM</th>
            <th>12.00-01.30 PM</th>
            <th>02.00-03.30 PM</th>
            <th>03.30-05.00 PM</th>
            <th>05.00-6.30 PM</th>      
        </tr>
             
    <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "401";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='401' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>











    <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "402";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='402' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>

















        <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "403";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='403' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>




















        <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "404";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='404' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>




















        <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "405";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='405' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>



















        <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "406";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='406' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>



























        <tr>
        <td style="background-color:red">
            <form action="">
                <?php
                    echo "407";
                ?>
             </form> 
           </td>

        <td style="background-color:#00FA9A">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class1 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class1"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>                        
        </td>

       <td style="background-color: #CC33FF">
            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class2 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class2"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
       <td style="background-color:#FF0066">
       
             <form action="">
                 <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class3 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class3"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
       </td>
       
      <td style="background-color:white">


            <form action="">

                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class4 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class4"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form>
                                
        </td>
        
        
      <td style="background-color:skyblue">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class5 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class5"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
                                              
        </td>
        
        
        <td style="background-color:#FFFF99">

            <form action="">
                <?php
                    include 'dbconnect.php';
                    $sql = "SELECT class6 FROM class where Room='407' && Day = 'sun'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        

                        while($row = $result->fetch_assoc())
                        {
                            echo' '.$row["class6"].' ';
                        }
                        
                    }
                    else
                    {
                    echo'No Class';
                    }
                    
                    $conn->close();
                
                ?>
            </form> 
        </td>

    </tr>


    </body>
    <br>
    <br>
</html>