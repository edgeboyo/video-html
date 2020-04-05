<html>
<head>
<title>Watch</title>
</head>

<body>

<?php
   $whatDo = $_GET["ep"];

   if(isset($whatDo)){
	   echo '<h2> Player </h2><br><br>';

	   echo '<video controls>
  		<source src=films/' . $whatDo  .  ' type="video/mp4">
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

	echo "<a href=" . $thisDomain . $films[$i] . ">" . $films[$i] . "</a><br>";
   }
?>

</body>
</html>

