<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
    {
        header("location:home.php");
    }
?>




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
        th
        {
            text-align: center;
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
           <h2 class="dept">Department:Computer Science and Engineering</h2>
             <h3 style="text-align:center;">Class Routine Schedule</h3>
             <h3 style="text-align:center;">Update for Sunday</h3>
               <h4 >
               
               <a href="updateindex.php">Saturday</a>
               <a href="updatesunday.php">Sunday</a>
               <a href="updatemonday.php">Monday</a>
               <a href="updatetuesday.php">Tuesday</a>
               <a href="updatewednesday.php">Wednesday</a>
               <a href="updatethursday.php">Thursday</a>
                </h4>
        <div class="cls">
            <br>
            <form action="dbsunday.php" method="post">
            <table border="2" align="center">


                <tr style="background-color:#00FFFF;">
                    <th><b>Room No</b></th>
                    <th>09.00-10.30 AM</th>
                    <th>10.30-12.00 PM</th>
                    <th>12.00-01.30 PM</th>
                    <th>02.00-03.30 PM</th>
                    <th>03.30-05.00 PM</th>
                    <th>05.00-06.30 PM</th>     
                </tr>
                         
                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "401";
                        ?>
                         
                    </td>

                    <td style="background-color:#00FA9A" >

                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A"  name="batch11" class="form-control">
                            <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub11" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam11" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                
                    </td>

                    <td style="background-color: #CC33FF">

                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        <select style="background-color: #CC33FF" name="batch12" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub12" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam12" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>

                    <td style="background-color:#FF0066">
                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                        <select style="background-color:#FF0066" name="batch13" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub13" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam13" class="form-control">
                        <option value="">Select Sir Name</option>

                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                   
                    <td style="background-color:white">

                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        <select style="background-color:white" name="batch14" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub14" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam14" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch15" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub15" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam15" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                        <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch16" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub16" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam16" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>











                <tr>
                    <td style="background-color:red">
                        
                            <?php
                                echo "402";
                            ?>
                        
                       </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch21" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub21" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam21" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                    <td style="background-color: #CC33FF">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch22" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub22" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam22" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>

                    <td style="background-color:#FF0066">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                        <select style="background-color:#FF0066" name="batch23" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub23" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam23" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>


                        <select style="background-color:white" name="batch24" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub24" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam24" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch25" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub25" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam25" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch26" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub26" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam26" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>

















                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "403";
                        ?>
                        
                    </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch31" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub31" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam31" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                    <td style="background-color: #CC33FF">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch32" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub32" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam32" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>


                    <td style="background-color:#FF0066">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                        <select style="background-color: #FF0066" name="batch33" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub33" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam33" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:white" name="batch34" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub34" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam34" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch35" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub35" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam35" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch36" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub36" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam36" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>




















                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "404";
                        ?>
                        
                    </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch41" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub41" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam41" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                   <td style="background-color: #CC33FF">
                   <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch42" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub42" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam42" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>

                    <td style="background-color:#FF0066">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                        <select style="background-color:#FF0066" name="batch43" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub43" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam43" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>


                        <select style="background-color:white" name="batch44" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub44" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam44" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch45" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub45" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam45" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch46" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub46" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam46" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>




















                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "405";
                        ?>
                          
                    </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch51" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub51" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam51" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                    <td style="background-color: #CC33FF">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch52" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub52" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam52" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                   <td style="background-color:#FF0066">
                   <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                       <select style="background-color:#FF0066" name="batch53" class="form-control">
                       <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub53" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam53" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                   </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>


                        <select style="background-color:white" name="batch54" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub54" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam54" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch55" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub55" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam55" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch56" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub56" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam56" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>



















                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "406";
                        ?>
                         
                    </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch61" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub61" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam61" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                   <td style="background-color: #CC33FF">
                   <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch62" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub62" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam62" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                    <td style="background-color:#FF0066">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                       <select style="background-color:#FF0066" name="batch63" class="form-control">
                       <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub63" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam63" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>  
                                                          
                   </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>


                        <select style="background-color:white" name="batch64" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub64" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam64" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch65" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub65" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam65" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch66" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub66" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam66" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                </tr>



























                <tr>
                    <td style="background-color:red">
                        
                        <?php
                            echo "407";
                        ?>
                         
                    </td>

                    <td style="background-color:#00FA9A">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#00FA9A" name="batch71" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sub71" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#00FA9A" name="sirnam71" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>

                   <td style="background-color: #CC33FF">
                   <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                        
                        <select style="background-color: #CC33FF" name="batch72" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sub72" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color: #CC33FF" name="sirnam72" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select> 
                                                          
                    </td>
                   <td style="background-color:#FF0066">
                   <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>
                   
                        <select style="background-color:#FF0066" name="batch73" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sub73" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FF0066" name="sirnam73" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>
                   
                    <td style="background-color:white">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:white" name="batch74" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sub74" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:white" name="sirnam74" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                            
                    </td>
                    
                    
                    <td style="background-color:skyblue">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:skyblue" name="batch75" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sub75" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:skyblue" name="sirnam75" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>
                                                          
                    </td>
                    
                    
                    <td style="background-color:#FFFF99">
                    <?php
    
                            include('dbconnect.php');
                            $sql1 = "SELECT  name FROM selection1";
                            $sql2 = "SELECT  sub FROM selection2";
                            $sql3 = "SELECT  batch FROM selection3";

                            $result1 = $conn->query($sql1);
                            $result2 = $conn->query($sql2);
                            $result3 = $conn->query($sql3);

                        ?>

                        <select style="background-color:#FFFF99" name="batch76" class="form-control">
                        <option value="">Select Batch Number</option>
                            <?php
                                while($row = $result3->fetch_assoc())
                                {
                                    echo "<option value='".$row['batch']."'>".$row['batch']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sub76" class="form-control">
                        <option value="">Select Sub Name</option>
                            <?php
                                while($row = $result2->fetch_assoc())
                                {
                                    echo "<option value='".$row['sub']."'>".$row['sub']."</option>";
                                }

                            ?>
                        </select>

                        <select style="background-color:#FFFF99" name="sirnam76" class="form-control">
                        <option value="">Select Sir Name</option>
                            <?php
                                while($row = $result1->fetch_assoc())
                                {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }

                            ?>
                        </select>

                    </td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
            </form>
        </div>

        <br>
        <br>
        <br>
        <br>


            
            <div class="col-md-4">
                
            </div>



            <div class="col-md-4">
                <form action="newinformation.php" method="post">
                    <label for="usr">Add more Information</label>
                    <div class="form-group">
                        <input type="text" name="bat" class="form-control" id="usr" placeholder="Entire New Batch Number..." maxlength="25">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subj" class="form-control" id="usr" placeholder="Entire New Subject..." maxlength="25">
                    </div>
                    <div class="form-group">
                        <input type="text" name="snam" class="form-control" id="usr" placeholder="Entire New Sir Name..." maxlength="25">
                    </div>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                    <br>
                    <br>
                </form>
                
            </div>
            <div class="col-md-4">
                
            </div>
            

    </body>
</html>