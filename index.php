<!DOCTYPE html>
<html lang="">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
    <div id="main">
    <section id="carousel-container">
       <?php
$files=glob('img/*');
//this sets up a shuffle of images
shuffle($files);

for($i=0; $i< 10; $i++) {
     ?>
<div class="box"><img src="<?php echo $files[$i];?>" style="width:100%" ></div>
   <?php
    } ?>
        
    
 
    </section>
  <ul class="banner">
  

    <li><button class="buttons" id="btn-prev">Prev</button> </li>
    <li><h1>JACKSON<br>August 24, 2013</h1></li>
    <li><button class="buttons" id="btn-next">Next</button></li>
      </ul>
        </div>
    <script src="makeitwork.js"></script>
</body>
</html>