<?php

$assetMap = file_get_contents('./lovelots/assetmap.txt');

foreach(array_filter(explode("\n", $assetMap)) as $assetBreak) {
  $assetLayerFinal[] = explode(" - ", $assetBreak);
}
?><!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
  	
	<title>Pretty Boys - moments</title>
</head>
<body>
	<header>
		<div class="cd-nugget-info">
			<a href="https://www.phoenixpeca.xyz/">
				<span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
						<style type="text/css">
							.cd-nugget-info-arrow{fill:#383838;}
						</style>
						<polygon class="cd-nugget-info-arrow" points="15,7 4.4,7 8.4,3 7,1.6 0.6,8 0.6,8 0.6,8 7,14.4 8.4,13 4.4,9 15,9 "/>
					</svg>
				</span>
				Phoenix Peca
			</a>
		</div> <!-- cd-nugget-info -->
		<h1>Pretty Boys</h1>
	</header>

	<section class="cd-timeline js-cd-timeline">
		<div class="cd-timeline__container">

<?php
foreach($assetLayerFinal as $timelineBlock=>$timelineProperties) {
  if(strtolower($timelineProperties[1]) == "picture") {
    
  }
  echo '			<div class="cd-timeline__block js-cd-block">
				<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
					<img src="img/cd-icon-picture.svg" alt="Picture">
				</div> <!-- cd-timeline__img -->

				<div class="cd-timeline__content js-cd-content">
          <img src="'.$timelineProperties[2].'"/>
          <span class="cd-timeline__date">'.$timelineProperties[0].'</span>
				</div> <!-- cd-timeline__content -->
			</div> <!-- cd-timeline__block -->';
}
?>


		</div>
	</section> <!-- cd-timeline -->
	
<script src="js/main.js"></script> <!-- Resource JavaScript -->
</body>
</html>