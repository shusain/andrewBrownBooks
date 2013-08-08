<!DOCTYPE html>
<html data-ng-app="eventModule">
<head>
	<title>Pyramid Players Productions</title>
	<?php include('htmlHead.html');?>
	<script src="scripts/Eventbrite.jquery.js" type="text/javascript"></script>
</head>
<body>
	<div id="outerContainer">
		<div style="height:20px"></div>
		<?php include('header.html');?>
		<div id="contentRegion" data-ng-controller="EventCtrl">
			<article class="contentContainer">
				<h1>Events</h1>
				<div data-event
						data-url="{{eventWrapper.event.url}}"
						data-date="{{eventWrapper.event.formattedDate}}"
						data-title="{{eventWrapper.event.title}}"
						data-description="{{eventWrapper.event.description}}"
						data-cost="${{eventWrapper.event.tickets[0].ticket.price}}"
						data-eventId="{{eventWrapper.event.id}}"
						data-where="{{eventWrapper.event.venue.address}} {{eventWrapper.event.venue.city}} {{eventWrapper.event.venue.region}}"
						data-ng-repeat="eventWrapper in events"></div>
			</article>
		</div>
		<?php include('footer.html');?>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
	<script type="text/javascript" src="eventDirective.js"></script>
</body>
</html>