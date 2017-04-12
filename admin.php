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
        li.rig
        {
            float: right;
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
        option
        {
            color: black;
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
                    <li class = "Top2"><a class = "Top4" href="home.php">Home</a></li>
                    <li class = "rig"><a class = "Top4" href="logout.php">Logout</a></li>
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
                    <select name="batch" class="form-control">
                        <option value="">Select Batch Number</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                    <br>
                    <select name="sub" class="form-control">
                        <option value="">Select Sub Name</option>
                        <option value="CSE-111">CSE-111</option>
                        <option value="CSE-112">CSE-112</option>
                        <option value="CSE-113">CSE-113</option>
                        <option value="MATH-111">MATH-111</option>
                        <option value="ENG-111">ENG-111</option>
                        <option value="BUS-115">BUS-115</option>
                        <option value="CSE-121">CSE-121</option>
                        <option value="CSE-122">CSE-122</option>
                        <option value="ENG-125">ENG-125</option>
                        <option value="MATH-121">MATH-121</option>
                        <option value="CSE-123">CSE-123</option>
                        <option value="CSE-124">CSE-124</option>
                        <option value="CSE-131">CSE-131</option>
                        <option value="CSE-133">CSE-133</option>
                        <option value="CSE-134">CSE-134</option>
                        <option value="CSE-135">CSE-135</option>
                        <option value="CSE-136">CSE-136</option>
                        <option value="BUS-135">BUS-135</option>
                        <option value="CSE-211">CSE-211</option>
                        <option value="CSE-212">CSE-212</option>
                        <option value="CSE-213">CSE-213</option>
                        <option value="CSE-214">CSE-214</option>
                        <option value="CSE-215">CSE-215</option>
                        <option value="MATH-211">MATH-211</option>
                        <option value="CSE-221">CSE-221</option>
                        <option value="CSE-222">CSE-222</option>
                        <option value="CSE-223">CSE-223</option>
                        <option value="CSE-224">CSE-224</option>
                        <option value="STAT-225">STAT-225</option>
                        <option value="CSE-231">CSE-231</option>
                        <option value="CSE-232">CSE-232</option>
                        <option value="CSE-233">CSE-233</option>
                        <option value="CSE-234">CSE-234</option>
                        <option value="CSE-235">CSE-235</option>
                        <option value="CSE-311">CSE-311</option>
                        <option value="CSE-312">CSE-312</option>
                        <option value="CSE-313">CSE-313</option>
                        <option value="CSE-314">CSE-314</option>
                        <option value="BUS-315">BUS-315</option>
                        <option value="CSE-316">CSE-316</option>
                        <option value="CSE-331">CSE-321</option>
                        <option value="CSE-322">CSE-322</option>
                        <option value="CSE-323">CSE-323</option>
                        <option value="STAT-324">STAT-324</option>
                        <option value="CSE-325">CSE-325</option>
                        <option value="CSE-326">CSE-326</option>
                        <option value="CSE-331">CSE-331</option>
                        <option value="CSE-332">CSE-332</option>
                        <option value="CSE-333">CSE-333</option>
                        <option value=CSE-334"">CSE-334</option>
                        <option value="CSE-335">CSE-335</option>
                        <option value="CSE-336">CSE-336</option>
                        <option value="CSE-400">CSE-400</option>
                        <option value="CSE-411">CSE-411</option>
                        <option value="CSE-412">CSE-412</option>
                        <option value="BUS-415">BUS-415</option>
                        <option value="CSE-413">CSE-413</option>
                        <option value="CSE-400">CSE-400</option>
                        <option value="CSE-421">CSE-421</option>
                        <option value="CSE-422">CSE-422</option>
                        <option value="CSE-423">CSE-423</option>
                        <option value="CSE-424">CSE-424</option>
                        <option value="CSE-400">CSE-400</option>
                        <option value="CSE-431">CSE-431</option>
                        <option value="CSE-432">CSE-432</option>
                        <option value="CSE-433">CSE-433</option>
                    </select>
                    <br>
                    <select name="sirnam" class="form-control">
                        <option value="">Select Sir Name</option>
                        <option value="Mr.Sadiq Iqbal(SI)">Mr.Sadiq Iqbal(SI)</option>
                        <option value="Mr.Yeasir Fathah(YF)">Mr.Yeasir Fathah(YF)</option>
                        <option value="Ibrahim hussain">Ibrahim hussain</option>
                        <option value="Shahriar parvez">Shahriar parvez</option>
                        <option value="Rokeya khatun">Rokeya khatun</option>
                        <option value="Uzzal Kumar Prodhan">Uzzal Kumar Prodhan</option>
                        <option value="Md.Ali Hossain">Md.Ali Hossain</option>
                        <option value="Utpal Dey">Utpal Dey</option>
                        <option value="Umme Samlma">Umme Samlma</option>
                        <option value="Bikash Karmokar">Bikash Karmokar</option>
                        <option value="Sujan Howlader Essan">Sujan Howlader Essan</option>
                        <option value="Sarwar Parvez">Sarwar Parvez</option>
                        <option value="Dr.Israt Jahan">Dr.Israt Jahan</option>
                        <option value="Mrinmoy Das">Mrinmoy Das</option>
                        <option value="Sadia Afrin Shampa">Sadia Afrin Shampa</option>
                        <option value="Saoreen Rahman">Saoreen Rahman</option>
                        <option value="Jaba Chakrabarty">Jaba Chakrabarty</option>
                        <option value="Meskat Ibne Sarif">Meskat Ibne Sarif</option>
                    </select>
                    <br>
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