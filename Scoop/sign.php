<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
   <div class="row" style="min-height:150px;background-color:#f2f2f2">
<!--<span style="text-align: right;font-family: 'Century Gothic'"></span>-->
       <span style="font-size: 80px; font-family: 'Century Gothic';font-weight: 600;margin-left: 70%"><span style="color:#0f4e8d">h</span><span style="color:darkred">a</span><span style="color:#dcbe19">d</span><span style="color:darkred">o</span><span style="color:darkgreen">o</span><span style="color:#0f4e8d">p</span><sub style="font-size: 30px;color:#e0342b">sign-up</sub></span>
    </div>

    <div class="row" style="min-height: 45px;">
        <span style="font-size: 40px;color:#e0342b;font-family: 'Century Gothic';font-weight:600;margin-left: 20px">Sign-up</span>
    </div>
    <div class="row">

        <form action="insert.php" method="post">
            <div class="col-sm-5" style=";min-height: 547px">
                <br><br>
    <div class="row" style="max-height: 91px; ">
    <div class="col-sm-3">
      <div class="form-group">
          <input type="text" class="form-control" name="tb1" style="width: 250px;height: 40px" placeholder="Your FirstName">
      </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
                <input type="text" name="tb2" placeholder="Your Lastname" class="form-control" style="width: 250px;height:40px;margin-left: 80%;padding-top: 10px">
        </div>
    </div>
</div>

<br>
                <div class="row" style="max-height: 91px; ">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input name="age" type="number" class="form-control" style="width: 110px;height: 40px" placeholder="Your Age">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="nation" placeholder="Your  Nationality" class="form-control" style="width: 220px;height:40px;margin-left: 20%;padding-top: 10px">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select name="gender" style="width: 150px;height: 40px;margin-left: 190%">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                </div>
<br>
                <div class="row" style="max-height: 91px; ">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" style="width: 250px;height: 40px" placeholder="Your Email-ID">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="mobile" placeholder="Your Mobile No." class="form-control" style="width: 250px;height:40px;margin-left: 80%;padding-top: 10px">
                        </div>
                    </div>

                </div>
                <br>

                <div class="row" style="max-height: 91px; ">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" style="width: 250px;height: 40px" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="password" name="confirm" placeholder="Confirm Password" class="form-control" style="width: 250px;height:40px;margin-left: 80%;padding-top: 10px">
                        </div>
                    </div>

                </div>
<br><br>
                <div class="row" style="max-height: 91px; ">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Sign-up" style="width: 250px;height: 40px;margin-left: 90%">
                        </div>
                    </div>

                </div>






            </div></form>
        <div class="col-sm-7" style="min-height:547px ;">

        </div>
    </div>
</div>
</body>
</html>