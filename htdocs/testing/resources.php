<html>
<head>
	<?php include('htmlHead.html');?>
</head>
<body>
	<div id="outerContainer">
		<div style="height:20px"></div>
		<?php include('header.html');?>
		<div id="contentRegion">
			<article ng-app="socialMedia" ng-controller="socMedController">
				<div title="Social Media" class="contentContainer">
					<h1>Social Media</h1>
					Get connected! <br/><br/>
					
					<x-social-media-links
						youtube="http://www.youtube.com/user/BarrierBreaker101"
						twitter="https://twitter.com/LT_Break_Thru"
						facebook="https://www.facebook.com/ChampionCoach">
					</x-social-media-links>
					<div class="clear"></div>
				</div>
			</article>
		</div>
		<?php include('footer.html');?>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
    <script type="text/javascript" src="components/social-media-component/socialMedia.js"></script>
</body>
</html>