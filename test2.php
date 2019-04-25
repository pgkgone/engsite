
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/styles.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>
<div class="logo" id="site-logo">
    <p><a href="https://sfedu.ru/">
            <img src="images/logo_small.png" height="100" width="100">
        </a>
    </p>
</div>
<div id="content">
    <div id="test-content">
        <div id="task-head">
            <?php include ("php/beautyTitle.php");?>
        </div>
        <div id="task-text">
            <?php include ("php/tasker.php")?>
        </div>
        <div id="video-main">
            <?php include ("php/video.php");?>
        </div>
        <div id="text">

        </div>
        <div id="answer-input">

        </div>
    </div>
</div>
</body>