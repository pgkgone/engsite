<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>History of Physics - Part I</title>
    <style type="text/css">
        .main-menu-button{
            margin-top: 5px;
        }
        .next-button{
            margin-top: 5px;
        }
        .task-text{
            margin-left: 21px;
        }
    </style>
</head>
<?php
   function ContentProcessor($content)
   {
       $inputbox =
        "
            
        ";
   }
?>
?>
<body>
<div class="logo"> <img src="images/logo_small.png" height="100" width="100"></div>
<div class="content" align="center">
    <div class="header">
        <div class="Part 1">
            <h1 align="center"><span>Part I</span></h1>
        </div>
        <div class="task">
            <a class="task-text"> You will watch six short video films about some great discoveries in physics made by outstanding scientists.
                As you watch match the videos 1-6 with the appropriate headingsA-H in the text.
                There are two extra headings which you do not need to use.
            </a>
        </div>
    </div>
    <div class="buttonList">
        <div class="menu-buttons">
           <input type="button" class="next-button btn-primary" value="Prev part" onclick="" />
            <input type="button" class="main-menu-button btn-primary" value="Main menu" onclick="" />
            <input type="button" class="next-button btn-primary" value="Next part" onclick="" />
        </div>
    </div>
    <div class="buttonList">
        <?php
            $DB = new SQLite3("db.sqlite");
            $result=$DB->query("SELECT content FROM tests WHERE title = ". $_GET["title"]." AND part = ".   $_GET["part"]. "");
            echo $result->fetchArray()[0];
        ?>
    </div>
    <div class="buttonList">
        <div class="menu-buttons">
            <input type="button" class="next-button btn-primary" value="Prev part" onclick="" />
            <input type="button" class="main-menu-button btn-primary" value="Main menu" onclick="" />
            <input type="button" class="next-button btn-primary" value="Next part" onclick="" />
        </div>
    </div>
</div>
</body>
</html>