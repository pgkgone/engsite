<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Interdisciplinary Physics - Part III</title>
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
    document.getElementById(14 + 'q').removeAttribute('style');
    document.getElementById(15 + 'q').removeAttribute('style');
    document.getElementById(16 + 'q').removeAttribute('style');
    document.getElementById(17 + 'q').removeAttribute('style');
    document.getElementById(18 + 'q').removeAttribute('style');
    document.getElementById(19 + 'q').removeAttribute('style');
    document.getElementById(20 + 'q').removeAttribute('style');
    var a1 = $('input[name=14]:checked').val()
    var a2 = $('input[name=15]:checked').val() 
    var a3 = $('input[name=16]:checked').val()
    var a4 = $('input[name=17]:checked').val()  
    var a5 = $('input[name=18]:checked').val() 
    var a6 = $('input[name=19]:checked').val()
    var a7 = $('input[name=20]:checked').val()
    if (a1 == undefined || a2 == undefined || a3 == undefined || a4 == undefined || a5 == undefined || a6 == undefined || a7 == undefined) { 
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
                document.getElementById(err[j] + 'q').style.setProperty('border','1px solid red',"");
            }
        }    
    }
</script>
</head>

<body>
<div class="header">
    <div class="logo"><a href="http://sfedu.ru/"><img src="/images/logo.png"></a></div>
    <div class="title-part">
        <h1><span>Part III</span></h1>
    </div>
    <div class="task">
        You will watch a video film about the <i>Stanford Photonics Research Center</i> (SPRC). As you watch, <br>
        for questions <font class="task-char">14-20</font> choose the best answer (<font class="task-char">A</font>, <font class="task-char">B</font> or <font class="task-char">C</font>).
    </div>
</div>    


<div class="video">
    <div id="myElement">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement").setup({
                file: "Part3.flv",
            });
        </script> 
</div>
<div class="radio-bar">    
    <div style="float: left;">
        <div class="radios" id="14q">
            <font class="task-char">14.</font>
            <input type="radio" id="14" name="14" value="A"> A
            <input type="radio" id="14" name="14" value="B"> B
            <input type="radio" id="14" name="14" value="C"> C
        </div>
        <div class="radios" id="15q">
            <font class="task-char">15.</font>
            <input type="radio" id="15" name="15" value="A"> A
            <input type="radio" id="15" name="15" value="B"> B
            <input type="radio" id="15" name="15" value="C"> C
        </div>
        <div class="radios" id="16q">
            <font class="task-char">16.</font>
            <input type="radio" id="16" name="16" value="A"> A
            <input type="radio" id="16" name="16" value="B"> B
            <input type="radio" id="16" name="16" value="C"> C
        </div>
        <div class="radios" id="17q">
            <font class="task-char">17.</font>
            <input type="radio" id="17" name="17" value="A"> A
            <input type="radio" id="17" name="17" value="B"> B
            <input type="radio" id="17" name="17" value="C"> C
        </div>
    </div>
    <div class="check-button-part3">
        <input type="button" class="check-btn" onclick="send();" value="Check" />
        <input id="show_err" class="error-button" type="button" style="display: none;" onclick="check();" value="Show errors" />
    </div> 
    <div style="float: right;">
        <div class="radios" id="18q">
            <font class="task-char">18.</font>
            <input type="radio" id="18" name="18" value="A"> A
            <input type="radio" id="18" name="18" value="B"> B
            <input type="radio" id="18" name="18" value="C"> C
        </div>
        <div class="radios" id="19q">
            <font class="task-char">19.</font>
            <input type="radio" id="19" name="19" value="A"> A
            <input type="radio" id="19" name="19" value="B"> B
            <input type="radio" id="19" name="19" value="C"> C
        </div>
        <div class="radios" id="20q">
            <font class="task-char">20.</font>
            <input type="radio" id="20" name="20" value="A"> A
            <input type="radio" id="20" name="20" value="B"> B
            <input type="radio" id="20" name="20" value="C"> C
        </div>
   </div>
</div>    
    
  

<!-- Element to pop up -->
<div id="result">Content of popup</div>

<div class="text">
    <b>14. What is the major purpose for collaboration of the Stanford Photonics Research Center (SPRC) with commercial companies?</b>
    <ol>
        <li> To provide better opportunities for students' training and employment. </li>
        <li> To provide practical education for students on the west coast. </li>
        <li> To do relevant research for businesses. </li>
    </ol>
    <b>15. What is <i>NOT TRUE</i> about Meredith Lee's experience at Stanford?</b>
    <ol>
        <li> She is working on optical sensors for detecting biomolecules. </li>
        <li> She appreciates the opportunity to deal with people from different backgrounds. </li>
        <li> She is studying for a Master's Degree in Electrical Engineering. </li>
    </ol>
    <b>16. What is <i>TRUE</i> about Kevin Loewke?</b>
    <ol>
        <li> He is working on his PhD dissertation now. </li>
        <li> He was involved in some interdisciplinary project. </li>
        <li> He is a research scientist in the Stanford School of Medicine. </li>
    </ol>
    <b>17. Why did the SPRC, the Stanford Biorobotics Lab and the Stanford Institute for Stem Cell Biology and Regenerative Medicine join the same project?</b>
    <ol>
        <li> To improve image analysis techniques for applications in biology. </li>
        <li> To combine knowledge from different fields for solving some problems in biology. </li>
        <li> To launch a start-up company. </li>
    </ol>
    <b>18. What is Thomas O'Sullivan's research at Stanford aimed at?</b>
    <ol>
        <li> Miniaturizing biosensors so that they can be put inside living subjects. </li>
        <li> Collecting different data from experiments on animal subjects. </li>
        <li> Creating absolutely new type of optical biosensors. </li>
    </ol>
    <b>19. What new capabilities can this research bring about in the future if it is a success?</b>
    <ol>
        <li> To do testing of new drugs on patients not only on animal subjects. </li>
        <li> To treat many diseases more effectively. </li>
        <li> To implant miniaturized sensors into patients for monitoring disease risks in real time. </li>
    </ol>
    <b>20. What does Thomas O'Sullivan find especially great about Stanford?</b>
    <ol>
        <li> It has an excellent semiconductor fab where he can make his chips. </li>
        <li> It has all the necessary facilities for interdisciplinary research on its campus. </li>
        <li> It provides a unique opportunity to apply research findings in practice. </li>
    </ol>
</div>

<div class="bar">
    <div class="left-bar-box">
    <input type="button" class="prev-button" value="Previous part" onclick="location.href='../part_2'" />
    </div>
    <div class="right-bar-box">
    <input type="button" class="next-button" value="Next part" onclick="location.href='../part_4'" />
    </div>
    <div class="menu-box">
        <input type="button" class="menu-button" value="Choose part" onclick="location.href='../'" />
        <input type="button" class="menu-button" value="Main menu" onclick="location.href='/'" />
    </div>
</div>

</body>
</html>