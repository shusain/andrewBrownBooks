angular.module("eventModule", [])
	.directive("event", function($log) {
		return {
			restrict: "A",
			scope: {
					eventId:"@",
					title: "@",
					description: "@",
					cost: "@",
					where: "@",
					date: "@",
					url: "@"
				},
			templateUrl: 'eventTemplate.html'
		}
	});

function EventCtrl($http, $scope)
{	
	$scope.events=[];
	$scope.noEventsDisplay = "Loading events...";

	Eventbrite({'app_key': "EVC36F6EQZZ4M5DL6S"}, function(eb){
	    
	    // define a few parameters to pass to the API
	    // Options are listed here: http://developer.eventbrite.com/doc/organizers/organizer_list_events/
	    var options = {
	        'id'    : "3877641809",

	    };
	    
	    // provide a callback to display the response data:
	    eb.organizer_list_events( options, function( response ){
	    	console.log("Response received");

	    	validEvents = [];

	    	for(var i = 0; i<response.events.length; i++)
	    	{
	    		var date = new Date(response.events[i].event.start_date + " " + response.events[i].event.timezone_offset);
	    		var endDate = new Date(response.events[i].event.end_date + " " + response.events[i].event.timezone_offset);
				if(endDate.getTime()<new Date().getTime())
					continue;
	    		
	    		response.events[i].event.formattedDate = date.toDateString();
	    		validEvents.push(response.events[i])
	    	}
	    	if(validEvents.length == 0)
	    	{
	    		$scope.$apply(function(scope){scope.noEventsDisplay = "No upcoming events to display, please check back soon.";});
	    	}
	    	else
	    	{
	    		$scope.$apply(function(scope){scope.noEventsDisplay = "";});
	    	}
	    	$scope.$apply(function(scope){scope.events = validEvents;});
	    	
	        //$('.event_list').html(eb.utils.eventList( response, eb.utils.eventListRow ));
	    });
	});
}

