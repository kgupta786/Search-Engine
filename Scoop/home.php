<?php

session_start();
$_SESSION["email"]=null;
session_abort();



?>
<!DOCTYPE html>
<html>
<head>
    <title>www.hadoop.com</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="asd.css" />
<script>
    function demo() {
        document.getElementById("col").style.boxShadow="5px 5px 3px #888888";

    }
    function test()
    {
        document.getElementById("col").style.boxShadow="";
    }
    function demo1() {
        document.getElementById("col1").style.boxShadow="5px 5px 3px #888888";
        document.getElementById("col1").style.border="10px";

    }
    function test1()
    {
        document.getElementById("col1").style.boxShadow="";
    }
    function demo2() {
        document.getElementById("col2").style.boxShadow="5px 5px 3px #888888";

    }
    function test2()
    {
        document.getElementById("col2").style.boxShadow="";
    }
</script>

</head>
<body>
<script type="text/javascript">

    var r = document.getElementById("voice");

    function startConverting () {
        if('webkitSpeechRecognition' in window){
            var speechRecognizer = new webkitSpeechRecognition();
            speechRecognizer.continuous = true;
            speechRecognizer.interimResults = true;
            speechRecognizer.lang = 'en-IN';
            speechRecognizer.start();

            var finalTranscripts = '';

            speechRecognizer.onresult = function(event){
                var interimTranscripts = '';
                for(var i = event.resultIndex; i < event.results.length; i++){
                    var transcript = event.results[i][0].transcript;
                    transcript.replace("\n", "<br>");
                    if(event.results[i].isFinal){
                        finalTranscripts += transcript;
                    }else{
                        interimTranscripts += transcript;
                    }
                }
                r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
            };
            speechRecognizer.onerror = function (event) {
            };
        }else{
            r.innerHTML = 'Your browser is not supported. If google chrome, please upgrade!';
        }
    }



</script>

<div class="container-fluid">
    <div class="row" id="header" >
        <br>
<hr>
        <div class="col-sm-6">
    <ul class="nav nav-pills" style="text-align:right;">
        <li type="active"><a href="sign.php">Sign-up</a></li>
        <li type="active"><a href="">Hadoop-Mail</a></li>
<li type="active"><a href="">Hadoop-Messenger</a> </li>
    </ul></div>
        <form action="logup.php" method="post">
        <div class="col-sm-6" style="max-height: 91px; ">
            <div class="col-sm-2">
                <div class="form-group">
                    <input type="text" name="user"  class="form-control" style="width: 170px;height: 40px;margin-left: 300%;" placeholder="Enter email-id">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input type="password" name="logpass" placeholder="Enter Password" class="form-control" style="width: 170px;height:40px;margin-left: 360%;padding-top: 10px">

                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <input type="submit" name="but" value="Login" class="btn btn-info" style="width: 80px;height:40px;margin-left: 420%;padding-top: 10px">
                </div>
            </div>

        </div>
        </form></div>


    <div class="row" id="main">
<div class="col-md-3"></div>
<div class="col-md-7">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <img src=""align="center" width="554px" height="140px" style="padding-bottom: 10px"><br>

</div>
        <div class="col-md-2">

        </div>

    </div>


    <div class="row" id="panel">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form action="search1.php" method="get">
            <div class="form-group">
                <input name="name" class="form-control" id="text1" placeholder="Search Hadoop or type URL" autocomplete="off" aria-hidden="true" type="text" style="box-shadow:5px 5px 3px #888888 ;height: 42px;width: 630px;">

<!--  <div class="row">
       echo "Hello world how are you!!";

  </div>



    -->
                <div id="fkbx-spch" tabindex="0" aria-label="Search by voice" style="display: block;"></div>
                <div id="fkbx-hspch" tabindex="0" aria-label="Listening for &quot;Ok Google&quot;"></div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="form-group">
                <a href="voice.php"><span style="margin-left: 40px">Search by Voice</span> </a>
            <!--   <input type="submit"   class="btn btn-success" style="width: 42px;height: 42px">
            --></div>
        </div></form>
        <div class="col-md-3">

        </div>

            </div>


    <div class="row" id="footer">
        <div class="col-md-3" id="voice">

    </div>
    <div class="col-md-2">
        <br>
        <br>
        <table class="table  table-bordered table-responsive" id="table" style="width: 210px;height: 200px">
            <tr>
                <td  style="width: 210px;" class="active" onmouseover="demo()" onmouseleave="test()" id="col" ><span style="font-size: 35px; font-family: 'Century Gothic';font-weight: 600;margin-left: 4px"><span style="color:#0f4e8d">h</span><span style="color:darkred">a</span><span style="color:#dcbe19">d</span><span style="color:darkred">o</span><span style="color:darkgreen">o</span><span style="color:#0f4e8d">p</span><sub style="font-size: 20px;color:#e0342b">cart</sub></span> </td>
            </tr></table>

    </div>
        <div class="col-md-2">
            <br>
            <br>
            <table class="table  table-bordered table-responsive" id="table" style="width: 210px;height: 200px">
                <tr>
                    <td id="col1" onmouseover="demo1()" onmouseleave="test1()" class="active"><span style="font-size: 35px; font-family: 'Century Gothic';font-weight: 600;margin-left: 4px"><span style="color:#0f4e8d">h</span><span style="color:darkred">a</span><span style="color:#dcbe19">d</span><span style="color:darkred">o</span><span style="color:darkgreen">o</span><span style="color:#0f4e8d">p</span><sub style="font-size: 20px;color:#e0342b">maps</sub></span> </td>
                </tr></table>

        </div>

        <div class="col-md-1">
            <br>
            <br>
            <table class="table  table-bordered table-responsive" role="presentation" id="table" style="width: 210px;height: 200px;padding-left: -3px">
                <tr>
                    <td id="col2" onmouseover="demo2()" onmouseleave="test2()" style="width: 216px;" class="active"><span style="font-size: 35px; font-family: 'Century Gothic';font-weight: 600;margin-left: 4px"><span style="color:#0f4e8d">h</span><span style="color:darkred">a</span><span style="color:#dcbe19">d</span><span style="color:darkred">o</span><span style="color:darkgreen">o</span><span style="color:#0f4e8d">p</span><sub style="font-size: 20px;color:#e0342b">edu.</sub></span> </td>
                </tr></table>

        </div>





        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <ul class="nav nav-pills">
            <li type="active"><a href="">About Hadoop!</a> </li>
            <li type="active"><a href="">Contact-Us</a> </li>
            <li type="active"><a href="">CEO's Corner</a> </li>
            <li type="active"><a href="">Feedback for us!</a> </li>
        <!--   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li type="active" style="text-align: right"><a href="">Developed by Keshav Gupta</a></li>
        --></ul>
       <!-- <span style="text-align: right"> Developed by Mr. Keshav Gupta</span>
-->
    </div>



</div>




</body>
</html>