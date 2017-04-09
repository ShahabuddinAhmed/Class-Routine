<!DOCTYPE html>
<html>

    <head>

        <title>Student Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <style>

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba;
            background-size: cover;
        }

        div.Top
        {
            width: 100%;
            padding: 0px;
        }

        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

        div.Middle
        {
            width: 100%;
            padding: 0px;
            height: 600px;
            text-align: center;
            background-color: none;
        }

        ul.Top1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
        }

        li.Top2
        {
            float: left;
        }

        li.Top3
        {
            float: right;
        }

        a.Top4
        {
            display: block;
            color: white;
            text-align: center;
            padding: 20px;
            text-decoration: none;
        }

        a:hover
        {
            background-color: #111;
        }

        li:last-child
        {
            border-bottom: none;
        }
        .container {
             padding: 60px 120px;
        }
        @media (max-width: 600px) {
        .container{
                /*NOtice padding: */
                padding: 50px 20px;
            }
        }

    </style>

    <body>
        <div class="CLS">
            <!-- ==========Here Top Divition========= !-->
            <div class = "Top">
                <ul class = "Top1">
                    <li class = "Top2"><a class = "Top4" href="HallManagementSystem.php">Home</a></li>
                </ul>
            </div>
        </div>

        <div class=" row container">
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
                <form action="updateinfo.php" method="post" >
                	<label for="usr">Update Information</label>
                	<select name="slctrm" class="form-control">
                        <option style="color: #303036" value="" >Select Room Number</option>
                        <option style="color: black" value="401">401</option>
                        <option style="color: black" value="402">402</option>
                        <option style="color: black" value="403">403</option>
                        <option style="color: black" value="404">404</option>
                        <option style="color: black" value="405">405</option>
                        <option style="color: black" value="406">406</option>
                        <option style="color: black" value="407">407</option>
                    </select>
                    <br>
                    <select name="slctd" class="form-control">
                        <option style="color: #303036" value="" >Select Day</option>
                        <option style="color: black" value="sat">Saturday</option>
                        <option style="color: black" value="sun">Sunday</option>
                        <option style="color: black" value="mon">Monday</option>
                        <option style="color: black" value="thu">Thouseday</option>
                        <option style="color: black" value="wed">Wednesday</option>
                        <option style="color: black" value="tus">Thusday</option>
                    </select>
                    <br>
                    <select name="slctc" class="form-control">
                        <option style="color: #303036" value="" >Select Time</option>
                        <option style="color: black" value="cls1">9.00-10.30 AM</option>
                        <option style="color: black" value="cls2">10.30-12.00 PM</option>
                        <option style="color: black" value="cls3">12.00-01.30 PM</option>
                        <option style="color: black" value="cls4">02.00-03.30 PM</option>
                        <option style="color: black" value="cls5">03.30-05.00 PM</option>
                        <option style="color: black" value="cls6">05.00-6.30 PM</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <input type="text" name="batch" class="form-control" id="usr" placeholder="Entire Batch Number..." maxlength="25">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="sub" class="form-control" id="usr" placeholder="Entire Subject..." maxlength="25">
                    </div>

                    <div class="form-group">
                        <input type="text" name="sirnam" class="form-control" id="usr" placeholder="Entire Sir Name..." maxlength="25">
                    </div>
                    
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                    <br>
                    
                </form>
            </div>
            <div class="col-md-6">
                <form action="delete.php" method="post">
                    <label for="usr">Delete Information</label>
                    <select name="slctrm" class="form-control">
                        <option style="color: #303036" value="" >Select Room Number</option>
                        <option style="color: black" value="401">401</option>
                        <option style="color: black" value="402">402</option>
                        <option style="color: black" value="403">403</option>
                        <option style="color: black" value="404">404</option>
                        <option style="color: black" value="405">405</option>
                        <option style="color: black" value="406">406</option>
                        <option style="color: black" value="407">407</option>
                    </select>
                    <br>
                    <select name="slctd" class="form-control">
                        <option style="color: #303036" value="" >Select Day</option>
                        <option style="color: black" value="sat">Saturday</option>
                        <option style="color: black" value="sun">Sunday</option>
                        <option style="color: black" value="mon">Monday</option>
                        <option style="color: black" value="thu">Thouseday</option>
                        <option style="color: black" value="wed">Wednesday</option>
                        <option style="color: black" value="tus">Thusday</option>
                    </select>
                    <br>
                    <select name="slctc" class="form-control">
                        <option style="color: #303036" value="" >Select Time</option>
                        <option style="color: black" value="cls1">9.00-10.30 AM</option>
                        <option style="color: black" value="cls2">10.30-12.00 PM</option>
                        <option style="color: black" value="cls3">12.00-01.30 PM</option>
                        <option style="color: black" value="cls4">02.00-03.30 PM</option>
                        <option style="color: black" value="cls5">03.30-05.00 PM</option>
                        <option style="color: black" value="cls6">05.00-6.30 PM</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>            
    </body>
</html>