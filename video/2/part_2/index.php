<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Nanotechnology - Part II</title>
<script type="text/javascript" src="/js/jquery1.4.2.js"></script>
<!-- <script type="text/javascript" src="ajax.js"></script> -->
<link rel="stylesheet" href="/css/parts.css" />
<link rel="stylesheet" href="/css/style4.css" type="text/css" media="screen"/>
<script src="/js/parts/jquery-1.9.1.js"></script>
<script src="/js/parts/jquery.popup.js"></script>
<script type="text/javascript" src="/js/player/jwplayer.js"></script>
<script type="text/javascript">
    var err = [];
    function send() {
    document.getElementById(7).removeAttribute('style');
    document.getElementById(8).removeAttribute('style');
    document.getElementById(9).removeAttribute('style');
    document.getElementById(10).removeAttribute('style');
    document.getElementById(11).removeAttribute('style');
    document.getElementById(12).removeAttribute('style');
    document.getElementById(13).removeAttribute('style');
    var a1 = $("#7").val()
    var a2 = $("#8").val() 
    var a3 = $("#9").val()
    var a4 = $("#10").val()  
    var a5 = $("#11").val() 
    var a6 = $("#12").val()
    var a7 = $("#13").val()
    if (a1 == '' || a2 == '' || a3 == '' || a4 == '' || a5 == '' || a6 == '' || a7 == '') { 
        $("#result").empty();
        $("#result").append('You can check only after you have completed the whole task!');
        $('#result').bPopup();
    }  else {
        $.ajax({
            type: "POST",
            url: "senddata.php",
            data: 'a1=' + a1 + '&a2=' + a2 + '&a3=' + a3 + '&a4=' + a4 + '&a5=' + a5 + '&a6=' + a6 + '&a7=' + a7,
            dataType: 'JSON',
            success: function(html) {
                if (html.errors !== null) {
                    for (var i = 0; i <= 6; i++) {
                        err[i] = html.errors[i];
                    }
                    document.getElementById('show_err').style.setProperty('display','inline',"");
                } else {
                    document.getElementById('show_err').style.setProperty('display','none',"");
                }
                $("#result").empty();
                $("#result").html('Your score is ' + html.score + ' out of 7');
                $('#result').bPopup();
            }
            });
    }
    }
    function check() {
        for (var j = 0; j <=6; j++) {
            if (typeof(err[j]) !== "undefined") {
                document.getElementById(err[j]).style.setProperty('border','1px solid red',"");
            }
        }    
    }
</script>
</head>

<body>
 <div class="header">
    <div class="logo"><a href="http://sfedu.ru/"><img src="/images/logo.png"></a></div>  
    <div class="title-part">
        <h1><span>Part II</span></h1>
    </div>
    <div class="task">
        You will watch a short video film about the use of nanotechnology in cancer therapy. As you watch <br>complete the sentences <font class="task-char">7-13</font>. 
        Use <i>NO MORE THAN THREE WORDS</i> for each answer.
    </div>
</div>    


<div class="video">
    <div id="myElement">Loading the player...</div>
    <script type="text/javascript">
        jwplayer("myElement").setup({
            file: "Part2.flv",
        });
    </script> 
</div> 
<div class="check-button">
    <input type="button" class="check-btn" onclick="send();" value="Check" />
    <input id="show_err" class="error-button" type="button" style="display: none;" onclick="check();" value="Show errors" />
</div>  

<!-- Element to pop up -->
<div id="result"></div>

<div class="text">
    <p>The described new cancer treatment method makes it possible to enhance <font class="text-dig">7.</font> <input id="7" type="text" maxlength="30"> and doesn't add toxicity in standard radiotherapy.</p>
    <p>Nano x-ray nanoparticles are extremely <font class="text-dig">8.</font> <input id="8" type="text" maxlength="30"> </p>
    <p>The soft <font class="text-dig">9.</font> <input id="9" type="text" maxlength="30"> around them reduces undesirable interaction with the body. </p>
    <p>Nanocrystals accumulate and <font class="text-dig">10.</font> <input id="10" type="text" maxlength="30"> in a tumour after the nanoparticle suspension has been injected directly into it. </p>
    <p><font class="text-dig">11.</font> <input id="11" type="text" maxlength="30"> is the major limitation of the standard radiotherapy treatment as it kills not only cancer cells but healthy cells as well. </p>
    <p>Only one <font class="text-dig">12.</font> <input id="12" type="text" maxlength="30"> can increase the x-rays effect of several radiotherapy sessions and eventually reduce the tumour. </p>
    <p>It is claimed that <font class="text-dig">13.</font> <input id="13" type="text" maxlength="30"> can be used to combat different types of cancer.
</div>

<div class="bar">
    <div class="left-bar-box">
    <input type="button" class="prev-button" value="Previous part" onclick="location.href='../part_1'" />
    </div>
    <div class="right-bar-box">
    <input type="button" class="next-button" value="Next part" onclick="location.href='../part_3'" />
    </div>
    <div class="menu-box">
        <input type="button" class="menu-button" value="Choose part" onclick="location.href='../'" />
        <input type="button" class="menu-button" value="Main menu" onclick="location.href='/'" />
    </div>
</div>

</body>
</html>