<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Scientific Solutions for Global Issues - Part I</title>
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
        You will watch six short video films about global issues. Each video touches upon the particular aspect of humanity's urgent 
        challenges which is also described in the text <i>"What threatens our world?"</i>. 
        As you watch match the videos <font class="task-char">1-6</font> with the appropriate paragraphs <font class="task-char">A-F</font> in the text. 
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
        </select>
    </div>
    <div class="check-button">
       <input id="check-btn" class="check-btn" type="button" onclick="send();" value="Check" />
    </div>
</form>   

<!-- Element to pop up -->
<div id="result">Content of popup</div>

<div class="text">
     <div class="heading">What Threatens Our World?</div>
     <p>
         Today our planet is in a serious danger. The current state of environment has reached a crisis point. 
         Air, water and soil pollution, global warming, ozone layer depletion, deforestation, nuclear and industrial waste, 
         plants and animals extinction are among the most burning global issues.
     </p>
     <p><font class="par-char">(A)</font>We are fast approaching a crisis where the world's demand for energy will outstrip the 
         resources that are available to produce it. Moreover, the best scientific evidence suggests that burning fossil fuels is 
         responsible for the global warming that we have witnessed over the past century. The problem is that apart from nuclear power, 
         we still lack any truly viable ways of producing energy on a large scale that do not rely on burning oil, coal and gas. 
         It is one of the biggest challenges of the 21st century: how can the world's ever-increasing demand for energy be met 
         without causing further damage to the environment?
     </p>
     <p><font class="par-char">(B)</font>It hardly ever occurs to us, but "water" also has its limits, especially drinking water. 
         Since 1975 the demand for water has doubled worldwide. The lack of pure potable water is a fact for approximately 900 million people! 
         Every day 20.000 up to 30.000 people die from lack of pure water, that's one every 8 seconds.  Many of these are children. 
         According to some statistics two people in three across the world will face water shortages by 2025. Many of these people 
         will be forced from their homes to seek clean water supplies elsewhere.
     </p>
     <p><font class="par-char">(C)</font>We can no longer ignore the evidence of environmental erosion: the destruction of tropical forests, 
         home to over half of the planet's species; the shrinking of natural habitats due to demographic and urban growth; the slow death of 
         coral reefs, nearly one-third of which have already disappeared or suffered serious damage; the sharp decline in the numbers of 
         large wild mammals. Today, we know that nearly 16,000 known species are directly endangered. Our generation is probably the last 
         with the power to stop this destruction before we reach a point of no return.
     </p>
     <p><font class="par-char">(D)</font>We still, live, as all our ancestors have done, under the threat of disasters that could cause 
         worldwide devastation: volcanic super eruptions, asteroid impacts and others. Consider the catastrophic tsunami in December 2006, 
         which began 350 km  off the north-western tip of Sumatra in Indonesia and spread quickly across the Indian Ocean killing 
         some 300 000 people in Southeast Asia. In total, citizens from more than 30 countries were affected, with Sweden - a country far 
         from the Indian Ocean - alone losing more than 550 lives.
     </p>
     <p><font class="par-char">(E)</font>Cancer, according to recent reports, kills more people than do road accidents and air 
         accidents put together. Cancer has become the most dreaded killer disease, striking more and more people. Cancer is a double-edged 
         sword. It strikes a patient physically and it causes tremendous mental trauma. It is very hard indeed to accept the fact 
         that one has cancer. Then follow the long courses of treatment - chemotherapy, surgery and radiation. They say cancer is curable 
         if detected early. Early detections do occur but these constitute a very low percentage of the total number of cancer cases detected.
     </p>
     <p><font class="par-char">(F)</font>Scientists and researchers from various fields tell us that the effects of climate change 
         could be far-reaching, and, in some cases, cause serious problems. For example, rising temperatures could increase pollution 
         and reduce air quality in heavily populated urban areas, leading to an increase in respiratory and cardiovascular diseases. 
         Moreover global warming will have economic implications. Among them are expensive clean-up operations from the possible increase 
         in extreme weather such as more frequent and heavy rain falls in some regions, causing rivers to flood.
     </p>
     <p>
         Coping with the world’s most serious challenges will require a variety of solutions and contributions from researchers from a 
         wide range of disciplines. Science – and physics in particular – can play a major role in solving the problems facing humanity.
     </p>    
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