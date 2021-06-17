<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cutestation</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>

<body>
<section class="section">
    <div class="container">
		<h1 class="title"> Cutestation Video Player </h1>

<?php
   $whatDo = $_GET["ep"];

   
   if(isset($whatDo)){
	   $whatDo = rawurldecode ($whatDo);
	   echo '<h2 class=subtitle> Now watching ' . $whatDo . ' </h2>';
		
	   echo '<video controls autoplay>
  		<source src="films/' . $whatDo  .  '" type="video/mp4">
		Your browser does not support the video tag.
	</video>';
   }
?>
	</div>
</section>

<section class="section">
	<div class="container">
		<h2 class="subtitle"> Choose Video to Watch </h2>
			<div class="row columns is-multiline">
<?php
	include "helpers.php";

   	$dir = 'films/';
   	$films = scandir($dir);

   	$thisDomain= "index.php?ep=";
   
	$cardStart = "<dir class=columns is-4> <dir class=card large> <dir class=card-content>";

	$cardEnd = "</dir></dir></dir>";

   for($i = 0; $i < count($films); $i++){
	if(substr($films[$i], 0, 1) == "."){
		continue;
	}

	$encode = rawurlencode($films[$i]);

	echo "<a href=" . $thisDomain . $encode . ">" . $cardStart . stripExtension($films[$i]) . $cardEnd . "</a><br>";
   }
?>
		</div>
	</div>
</section>
</body>
</html>

