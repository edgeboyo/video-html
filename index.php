<html>
<head>
<title>Watch</title>
</head>

<body>

<?php
   $whatDo = $_GET["ep"];


   if(isset($whatDo)){
           $whatDo = rawurldecode ($whatDo);
           echo '<h2> Player </h2><br><br>';

           echo '<video controls autoplay>
                <source src="films/' . $whatDo  .  '" type="video/mp4">
                Your browser does not support the video tag.
        </video>';
   }
?>

<h2> Choose Episode </h2>

<?php
   $dir = 'films/';
   $films = scandir($dir);

   $thisDomain= "index.php?ep=";

   for($i = 0; $i < count($films); $i++){
        if(substr($films[$i], 0, 1) == "."){
                continue;
        }

        $encode = rawurlencode($films[$i]);
        echo "<a href=" . $thisDomain . $encode . ">" . $encode . "</a><br>";
   }
?>

</body>
</html>
