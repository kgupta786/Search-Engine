<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="asd.css"/>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style >
        body{
            font-family: Calibri;
        }
        #result{
            height: 160px;width: 1500px;
        //width: 650px;
            //border: 1px solid #ccc;
            padding: 10px;
            //box-shadow: 0 0 10px 0 #bbb;
            margin-bottom: 30px;
            font-size:30px;
           // color: #9d9d9d;
            //line-height: 25px;
        }

        }
    </style>
</head>
<body><div class="container-fluid">
<div class="row" style="min-height: 34px">

</div>
<div class="row" style="min-height: 248px">
<div class="col-sm-3">

</div>
    <div class="col-sm-7">
        <br>
        <br>




        <img src="asista.png"  width="740px"  aria-label="image" height="180px" style="padding-bottom: 10px;"><br>

    </div>

    <form action="search1.php" method="get">
    <div class="col-sm-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<input type="submit"  class="btn btn-success" value="Search" style=" width: 150px;height: 40px">

    </div>


</div>
<div class="row" style="min-height: 50px">

    <div  class="col-sm-12" style="height: 140px;"  >
<textarea   style="border: 0 ;outline: 0 ;background: transparent;font-size: 35px;font-family: 'Calibri Light';resize:none; color: #9d9d9d" id="result" name="name" readonly>
</textarea>
    </div>
    </form>
<script>
    function hide()
    {
        var myInput = document.getElementById("result").style;
        myInput.borderStyle="none";
    }
</script>

</div>
<div class="row" style="min-height: 305px">
<div class="col-sm-5">

</div>
    <div class="col-sm-6">
<br>
        <input type="image" src="download.png" style="border: transparent" onmouseover="voice()" onmouseleave="down()" id="voicebutton" class="img img-circle" onclick="startConverting();">
        <script type="text/javascript">

            var r = document.getElementById('result');

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
                        r.value = finalTranscripts + interimTranscripts ;
                    };
                    speechRecognizer.onerror = function (event) {
                    };
                }else{
                    r.value = 'Your browser is not supported. If google chrome, please upgrade!';
                }
            }
function voice() {

    document.getElementById("voicebutton").style.boxShadow="5px 5px 3px #888888";
}
function down() {

    document.getElementById("voicebutton").style.boxShadow="";
}


        </script>


    </div>

</div>
<!---->

</div>
</body>
</html>