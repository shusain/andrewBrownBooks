<html>
<head>
	<?php include('htmlHead.html');?>
</head>
<body>
	<div id="outerContainer">
		<div style="height:20px"></div>
		<?php include('header.html');?>
		<div id="contentRegion" style="width:100%;">
			<article class="contentContainer"><h1>Order Book</h1>
				<center>
					<div>
						<img src="images/frontBookCoverSmall.jpg" alt="Overcome Adversitiy - Your Dreams Matter" style="max-width:100%"/>
						<br/>

						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="XJTUQP8TUK3QS">
						<input style="max-width:100%" type="image" src="images/buyNowBig.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="images/buyNowBig.png" width="1" height="1">
						</form>
						<br/>
						<div class="divider"></div>
						<br/>
						<h2>Thank you.  Your new journey starts today.</h2>
						
					</div>
				</center>
			<div class="clear">&nbsp;</div>
				<!--
				Cancel URL is http://www.andrewbrownbooks.com/cancel.html
				-->
				<!--
				Complete URL is http://www.andrewbrownbooks.com/thankyou.html
				Ask client about feedback on site.
				-->
			</article>
			<div class="clear">&nbsp;</div>
		</div>
		<?php include('footer.html');?>
	</div>
</body>
</html>