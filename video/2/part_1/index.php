<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Nanotechnology - Part I</title>
<script type="text/javascript" src="/js/jquery1.4.2.js"></script>
<!-- <script type="text/javascript" src="ajax.js"></script> -->
<link rel="stylesheet" href="/css/tabs.css" />
<link rel="stylesheet" href="/css/parts.css" />
<link rel="stylesheet" href="/css/style4.css" type="text/css" media="screen"/>
<!-- <script type="text/javascript" src="/js/parts/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/js/parts/jquery-ui.js"></script> -->
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
    You will watch six short video films about nanotechnology. Each video touches upon the particular aspect of nanotechnology 
    which is also described in the text <i>"How Small is Small?"</i>. As you watch match the videos <font class="task-char">1-6</font> with the appropriate paragraphs <font class="task-char">A-H</font> in the text. 
    There are more paragraphs in the text than you need to use.
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
     <div class="heading">How Small Is Small?</div>
     <p><font class="par-char">(A)</font>Nanotechnology is science and engineering at the scale of atoms and molecules. 
         It is the manipulation and use of materials and devices so tiny that nothing can be built any smaller.
     </p>
     <p><font class="par-char">(B)</font>Nanomaterials are typically between 0.1 and 100 nanometers (nm) in size - with 
     1nm being equivalent to one billionth of a meter. If one nanometer was roughly the width of a pinhead, then one meter 
     on this scale would stretch the entire distance from Washington, DC to Atlanta - around 1000 kilometers. 
     But a pinhead is actually one million nanometers wide. Most atoms are 0.1 to 0.2 nm wide, strands of DNA 
     around 2nm wide, red blood cells are around 7000 nm in diameter, while human hairs are typically 80,000 nm across.
     </p>
     <p><font class="par-char">(C)</font>People have made use of some unusual properties of materials at the nanoscale 
         for centuries. Tiny particles of gold for example, can appear red or green, a property that has been used 
         to colour stained glass windows for over 1000 years. However, the idea of nanotechnology was born only in 
         1959 when Nobel Prize winning physicist Richard Feynman gave a lecture exploring the idea of building things 
         at the atomic and molecular scale. He imagined the entire Encyclopedia Britannica written on the head of a pin.
     </p>
     <p><font class="par-char">(D)</font>When K. Eric Drexler popularized the word 'nanotechnology' in the 1980's, he was talking 
         about building machines on the scale of molecules, a few nanometers wide; motors, robot arms, and even whole computers, 
         far smaller than a cell. Drexler spent many years describing and analyzing these incredible devices, and responding to 
         accusations of science fiction. In fact, experimental nanotechnology appeared in 1981, when IBM scientists in Zurich, 
         Switzerland, built the first scanning tunneling microscope (STM). It made it possible to see single atoms by scanning a tiny probe over 
         the surface of a silicon crystal.
     </p>
     <p><font class="par-char">(E)</font>The nanometer length scale is unique because it makes it possible to change the fundamental 
         properties of materials without altering their chemical composition. Nanoparticles have very high surface areas and their behaviour 
         and mobility can be changed. Nanotechnology allows scientists to specifically analyze, organize and control matter on many length 
         scales simultaneously. This creates unlimited possibilities for products and applications. Advanced nanotechnology, or that which 
         works with artificial intelligence, nanorobots and self - assembly is expected to increase significantly.
     </p>
     <p><font class="par-char">(F)</font>Nanoparticles are currently used in the electronic, magnetic, optoelectronic, biomedical, 
         pharmaceutical, cosmetic, energy, catalytic and materials industries. In the medical field they are used to aid in drug delivery 
         and medical imaging, and in future nanotechnology is predicted to contribute to new cancer therapies, new treatments for 
         infections and brain diseases and new drugs with fewer side effects.
     </p>
     <p><font class="par-char">(G)</font>Nanotechnology is also expected to play a major role in environmental protection. 
         Nanoparticles may be used in contaminant neutralization, magnetic techniques, special filtering and cleaning methods, 
         environmental decontamination and energy conservation and in the production of energy efficient devices.
     </p>
      <p><font class="par-char">(H)</font>Nanotechnology involves manipulations of matter at extremely small levels and its applications 
          appear to be almost limitless. Cancer cures, shirts that change colour, self-heating/cooling clothes, super processors the 
          size of sugar cubes, alloys both lighter and stronger than steel are just a handful of the potential applications of this 
          technology that may bring about more change in 25 years than the entire 20th century.
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