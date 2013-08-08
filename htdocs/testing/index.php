<!DOCTYPE html>
<html data-ng-app="eventModule">
<head>
	<?php include('htmlHead.html');?>
	<script src="scripts/Eventbrite.jquery.js" type="text/javascript"></script>
	<!-- basic stylesheet -->
	<link rel="stylesheet" href="scripts/royalslider/royalslider.css">

	<!-- skin stylesheet (change it if you use another) -->
	<link rel="stylesheet" href="scripts/royalslider/skins/default/rs-default.css"> 

	<!-- Main slider JS script file --> 
	<!-- Create it with slider online build tool for better performance. -->
	<script src="scripts/royalslider/jquery.royalslider.min.js"></script>
</head>
<body>
	<div id="outerContainer">
		<div style="height:20px"></div>
		<?php include('header.html');?>
		<div id="contentRegion" data-ng-controller="EventCtrl">
			<article class="contentContainer">
				<center>
					<h1>
						Failure Has No Permission to Exist in Your Life
					</h1>
					<h2>
						<i>You Can Overcome Anything if You BELIEVE and TRY!!!</i>
					</h2>
					<iframe width="420" style="max-width:100%;display:block;" height="315" src="http://www.youtube.com/embed/OM0NjAZ8jHg?wmode=opaque" frameborder="0" allowfullscreen></iframe>
					<br/>

					<div class="divider"></div>
					<br/>
					<img src="images/frontBookCoverSmall.jpg" alt="Overcome Adversitiy - Your Dreams Matter" style="max-width:100%"/>

					<h2>“People can overcome life’s adversities, the moment they realize their dreams matter!!!”</h2>


				</center>

					<u>The book is for people who are facing or have dealt with:</u>
					<ul>
						<li>Life adversities</li>
						<li>Family problems</li>
						<li>Marital issues</li>
						<li>Financial challenges and hardship</li>
						<li>Uncertain career goals or burnout</li>
						<li>Low self-esteem</li>
						<li>Bodily injuries</li>
						<li>Auto accidents</li>
						<li>Loss of loved one(s)</li>
						<li>Any untimely event or situation of misfortune that negatively impacts your life.</li>
						<li>Life adversities</li>
					</ul>

					<u>In this book, the reader will learn:</u>
					<ul>
						<li><b>Mindset "Shift"</b> - How to turn fear into faith.</li>
						<li><b>A New You</b> - Refining a positive attitude for yourself and family.</li>
						<li><b>Courage in a Crisis</b> - Developing leadership in the midst of life challenges.</li>
						<li><b>Character Navigation</b> - Build self-esteem and confidence in your true identity.</li>
						<li><b>P.M.A.</b> - Positive Mental Attitude to unleash the CHAMPION in YOU</li>
						<li><b>Starting OVER</b> - Learn to Create Stepping Stones out of life circumstances</li>
						<li><b>Power of Focus</b> - New life, passion and dreams!</li>
						<li><b>The ACCIDENT OF LIFE</b> - Your Situation Is Not YOU! and much more…</li>
					</ul>
			</article>

			<!-- <article class="contentContainer">
				<h1>Events</h1>
				<div>{{noEventsDisplay}}</div>
				<div data-event
						data-url="{{eventWrapper.event.url}}"
						data-date="{{eventWrapper.event.formattedDate}}"
						data-title="{{eventWrapper.event.title}}"
						data-description="{{eventWrapper.event.description}}"
						data-cost="${{eventWrapper.event.tickets[0].ticket.price}}"
						data-eventId="{{eventWrapper.event.id}}"
						data-where="{{eventWrapper.event.venue.address}} {{eventWrapper.event.venue.city}} {{eventWrapper.event.venue.region}}"
						data-ng-repeat="eventWrapper in events"></div>
			</article> -->
			<article class="contentContainer">
				<h1>Testimonials</h1>
				“This book can inspire you and help you chart your life’s course in a positive direction.”<br/>– Nido Quebein, Chairman, Great Harvest Bread Company
				<br/><br/>
“…Someone somewhere is experiencing problems with marriage, family, business, finances, etc. By following your simple solutions presented in your book, anyone can overcome adversities.”<br/>
Lieutenant Colonel Eugene Blackwell, Illinois Army National Guard
			</article>
			<div class="clear">&nbsp;</div>
		</div>
		<?php include('footer.html');?>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
	<script type="text/javascript" src="eventDirective.js"></script>
</body>
</html>