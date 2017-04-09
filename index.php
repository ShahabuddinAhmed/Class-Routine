<!DOCTYPE html>
<html>
    <head>
        <title>Class Routine</title>
    </head>

    <style>

        div cls
        {
            text-align: center;
        }
        body
        {
            background-color: gray;
        }
        body
        {
            text-align: center;
        }
        table
        {
            border: 2px solid blue;
            position: center;
        }

    </style>

    <body>
        <h1 style="text-align:center;"><b>BANGLADESH UNIVERSITY</b></h1>
           <h2 style="text-align:center;">Department:Computer Science and Engineering</h2>
             <h3 style="text-align:center;">Class Routine Schedule</h3>
               <h4 >
               
               <a href="index.php"  style="text-decoration:none">Saturday</a>
               <a href="sunday.php"  style="text-decoration:none">Sunday</a>
               <a href="monday.php"  style="text-decoration:none">Monday</a>
               <a href="tuesday.php"  style="text-decoration:none">Tuesday</a>
               <a href="wednesday.php"  style="text-decoration:none">Wednesday</a>
               <a href="thusday.php"  style="text-decoration:none">Thursday</a>
                </h4>
    <div class="cls">
          
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
                    $sql = "SELECT class1 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='401' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='402' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='403' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='404' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='405' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='406' && Day = 'sat'";
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
                    $sql = "SELECT class1 FROM class where Room='407' && Day = 'sat'";
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
                    $sql = "SELECT class2 FROM class where Room='407' && Day = 'sat'";
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
                    $sql = "SELECT class3 FROM class where Room='407' && Day = 'sat'";
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
                    $sql = "SELECT class4 FROM class where Room='407' && Day = 'sat'";
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
                    $sql = "SELECT class5 FROM class where Room='407' && Day = 'sat'";
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
                    $sql = "SELECT class6 FROM class where Room='407' && Day = 'sat'";
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
</table>
</div>
    </body>
</html>