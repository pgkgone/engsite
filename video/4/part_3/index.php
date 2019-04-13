<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Scientific Solutions for Global Issues - Part III</title>
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
        You will watch a video film about the nuclear fusion for solving energy problems. As you watch, <br>
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
    <b>14. Why is it necessary to develop completely new energy sources?</b>
    <ol>
        <li> Fossil fuels cannot ensure sustainable and environmentally friendly development. </li>
        <li> Fossil fuels can satisfy only 80% of the world's need for energy. </li>
        <li> The burning of fossil fuels harms the environment. </li>
    </ol>
    <b>15. What is the main reason for so much interest in nuclear fusion research world-wide?</b>
    <ol>
        <li> Such research has lots of challenges and requires international collaboration. </li>
        <li> Nuclear fusion should become the mainstream energy source in the near future. </li>
        <li> In the future nuclear fusion power plants might be able to meet our demand for energy in a safe and sustainable way. </li>
    </ol>
    <b>16. What is nuclear fusion?</b>
    <ol>
        <li> It's the reaction in which atomic nucleus splits into helium nucleus and neutron and produces a lot of energy. </li>
        <li> It's the reaction between light atomic nuclei resulting in an extensive energy production. </li>
        <li> It's the reaction in which two hydrogen isotopes fuse and produce a large amount of energy. </li>
    </ol>
    <b>17. What is the major advantage of nuclear fusion?</b>
    <ol>
        <li> It's based on a high speed chain reaction. </li>
        <li> Nuclear fusion is safe because it doesn't produce radioactive end products. </li>
        <li> It's based on the reaction which can be stopped at any time. </li>
    </ol>
    <b>18. What is the main limitation of the Deuterium-Tritium reaction which underlies nuclear fusion?</b>
    <ol>
        <li> Tritium is a super heavy hydrogen. </li>
        <li> The natural resources of tritium are very limited in the world. </li>
        <li> Tritium is a weak radioactive emitter whose half-time period is only about 12 years. </li>
    </ol>
    <b>19. What is <i>NOT TRUE</i> about Lithium according to the film?</b>
    <ol>
        <li> It can replace Tritium in the D-T-reaction. </li>
        <li> It is an abundant and cheap raw material. </li>
        <li> It can be used for the artificial production of Tritium. </li>
    </ol>
    <b>20. What is the ITER Project aimed at?</b>
    <ol>
        <li> Finding the way for the safe and controlled use of the sun’s energy production mechanism on earth. </li>
        <li> Building an experimental fusion power reactor in Europe. </li>
        <li> Intensifying the nuclear fusion research through international collaboration. </li>
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