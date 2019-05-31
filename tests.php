<html>
<head>
    <link rel="stylesheet" href="css/styles2.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>
<body>
<div class="pdf_link" >
    <?php include ("php/pdf_link.php")?>
</div>
<div class="mainblock">
    <div class="animationblock">
        <div class="topblock">
            <div class="logo">
                <img src="logo.png" width="75vw" height="75vw">
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="/about.php">About</a>
                <a href="#">Content</a>
                <a href="#navanchor">Nav</a>
            </div>
        </div>
        <div class="map" id="map">
        </div>
    </div>
</div>
    <div class="content">
        <div class="centerblock">
            <div class="grid-wrapper-right-two-thirds">
                <?php include ("php/menu.php")?>
                <div style="position: relative;width: 80%;margin-left: 5%;">
            <?php include ("php/beautyTitle.php")?>
            <div class="post">
                <h2 class="title"><?php include ("php/tasker.php")?></h2>
            </div>
            <div class="post">
                <div class="entry yobject-marked">
                    <?php include ("php/video.php")?>
                    <?php include ("php/texter.php")?>
                    <?php include ("php/createButtons.php")?>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>