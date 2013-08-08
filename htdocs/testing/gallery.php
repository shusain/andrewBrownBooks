<html>
<head>
	<title>Pyramid Players Productions</title>
	<!-- basic stylesheet -->
	<link rel="stylesheet" href="scripts/royalslider/royalslider.css">

	<!-- skin stylesheet (change it if you use another) -->
	<link rel="stylesheet" href="scripts/royalslider/skins/default/rs-default.css"> 
	<?php include('htmlHead.html');?>
	<!-- Main slider JS script file --> 
	<!-- Create it with slider online build tool for better performance. -->
	<script src="scripts/royalslider/jquery.royalslider.min.js"></script>
</head>
<body>
	<div id="outerContainer">
		<div style="height:20px"></div>
		<?php include('header.html');?>
		<div id="contentRegion">
			<article class="contentContainer">
				<!-- <iframe class="youtube-player" type="text/html" src="http://www.youtube.com/embed/F711xe-mV-Q" frameborder="0">
				</iframe> -->
				<div class="royalSlider rsDefault">
				    <!-- simple image slide -->
				    <img class="rsImg" src="images/welcome.png" alt="Welcome to P3" />

				    <!-- lazy loaded image slide -->
				    <a class="rsImg" href="images/board1.png">image desc</a>

				    <!-- HTML content slide -->
				    <p>Content goes here</p>

				    <!-- image and content -->
				    <div>
				        <img class="rsImg" src="images/welcome.png" data-rsVideo="http://www.youtube.com/embed/F711xe-mV-Q" />
				        <p>Some content after...</p>
				    </div>

				    <!-- HTML content -->
				    <div>
				        Put any HTML content here
				    </div>

				    <!-- HTML content (100% with and height) -->
				    <div class="rsContent">
				        Put any HTML content here
				    </div>
				</div>	
			</article>
		</div>
		<?php include('footer.html');?>
	</div>
	<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
            autoScaleSlider:true,
	    	fullscreen: {
	    		// fullscreen options go gere
	    		enabled: true,
	    		native: true
	    	}
        });  
    });
	</script>
</body>
</html>