<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Interdisciplinary Physics - Part I</title>
<script type="text/javascript" src="/js/jquery1.4.2.js"></script>
<!-- <script type="text/javascript" src="ajax.js"></script> -->
<link rel="stylesheet" href="/css/tabs.css" />
<link rel="stylesheet" href="/css/parts.css" />
<link rel="stylesheet" href="/css/style4.css" type="text/css" media="screen"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="/js/parts/jquery.popup.js"></script>
<script type="text/javascript" src="/js/player/jwplayer.js"></script>
<script type="text/javascript">
function send() {
    var a1 = $("#1").val()
    var a2 = $("#2").val() 
    var a3 = $("#3").val()
    var a4 = $("#4").val()  
    var a5 = $("#5").val() 
    var a6 = $("#6").val()
    if (a1 == '' || a2 == '' || a3 == '' || a4 == '' || a5 == '' || a6 == '') { 
        $("#result").empty();
        $("#result").append('You can check only after you have completed the whole task!');
        $('#result').bPopup();
    }  else {
         $.ajax({
        type: "POST",
        url: "senddata.php",
        data: 'a1=' + a1 + '&a2=' + a2 + '&a3=' + a3 + '&a4=' + a4 + '&a5=' + a5 + '&a6=' + a6,
        success: function(html) {
            $("#result").empty();
            $("#result").append(html);
            $('#result').bPopup();
        }
        });
    }
   
}
</script>
<script>
    $(function() {
      $( "#tabs" ).tabs();
    });
</script>
</head>

<body>
<div class="header">
    <div class="logo"><a href="http://sfedu.ru/"><img src="/images/logo.png"></a></div>
    <div class="title-part">
        <h1><span>Part I</span></h1>
    </div>
    <div class="task">
        You will watch six short video films about the relationship of physics with other fields of knowledge. 
        As you watch match the videos <font class="task-char">1-6</font> with the appropriate headings <font class="task-char">A-H</font> in the text.
        There are two extra headings which you do not need to use. 
    </div>
</div>    

<div id="tabs" style="width: 520px;">
	<ul>
		<li><a href="#tabs-1">Video 1</a></li>
		<li><a href="#tabs-2">Video 2</a></li>
		<li><a href="#tabs-3">Video 3</a></li>
		<li><a href="#tabs-4">Video 4</a></li>
		<li><a href="#tabs-5">Video 5</a></li>
		<li><a href="#tabs-6">Video 6</a></li>
	</ul>
	<div id="tabs-1">
		<div id="myElement1">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement1").setup({
                file: "7.flv",
            });
        </script>
    </div>
	<div id="tabs-2">
		<div id="myElement2">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement2").setup({
                file: "2.flv",
            });
        </script>
	</div>
	<div id="tabs-3">
		<div id="myElement3">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement3").setup({
                file: "3.flv",
            });
        </script>
	</div>
	<div id="tabs-4">
		<div id="myElement4">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement4").setup({
                file: "4.flv",
            });
        </script>
	</div>
	<div id="tabs-5">
		<div id="myElement5">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement5").setup({
                file: "5.flv",
            });
        </script>
	</div>
	<div id="tabs-6">
		<div id="myElement6">Loading the player...</div>
        <script type="text/javascript">
            jwplayer("myElement6").setup({
                file: "6.flv",
            });
        </script>
	</div>
</div> 
<form id="form_1">
    <div class="answer-box">
        Video 1 
        <select id="1" name="1">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>

        Video 2 
        <select id="2" name="2">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>

        Video 3   
        <select id="3" name="3">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>

        Video 4   
        <select id="4" name="4">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>

        Video 5   
        <select id="5" name="5">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>

        Video 6  
        <select id="6" name="6">
            <option value="">Choose...</option> 
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>
            <option value="F"> F </option>
            <option value="G"> G </option>
            <option value="H"> H </option>
        </select>
    </div>
    <div class="check-button">
       <input id="check-btn" class="check-btn" type="button" onclick="send();" value="Check" />
    </div>
</form>   

<!-- Element to pop up -->
<div id="result">Content of popup</div>

<div class="text">
    <div class="choose-heading">Headings:</div>
     <ol>
        <li> Science which works miracles </li>
        <li> Educational opportunities in medical physics </li>
        <li> Advances in physics leading to breakthroughs in medicine </li>
        <li> Physics laws 'rule' in other sciences </li>
        <li> Physics in the study of our planet's properties </li>
        <li> These two are always together </li>
        <li> Physics in the study of the universe </li>
        <li> Photonics applied in medicine </li>
    </ol>    
</div>

<div class="bar">
    <input type="button" class="next-button" value="Next part" onclick="location.href='../part_2'" />
    <div class="menu-box">
        <input type="button" class="menu-button" value="Choose part" onclick="location.href='../'" />
        <input type="button" class="menu-button" value="Main menu" onclick="location.href='/'" />
    </div>
</div>

</body>
</html>