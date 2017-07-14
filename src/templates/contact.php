<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('submitEmail', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require '/src/lib/bower/phpmailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('do-not-reply@storageandgarages.com', 'Airport Storage & Garages');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('hunter@sitekick.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['submitEmail'], $_POST['submitName'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['submitEmail']}
Name: {$_POST['submitName']}
Message: {$_POST['submitComment']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reserve Storage | Airport Storage & Garages</title>
	<meta charset="utf-8">
	<meta description="Storage and large garages located in Newport News, VA">
	<link rel="stylesheet" href="assets/css/style.css" />
	<!--bower:css -->
	<!--endbower-->
</head>
<body class="interior contact">
	<div class="container-fluid">
		<?php include('assets/inc/header.html'); ?>
		<main class="row">
			
			<h1>Contact Us <span>socials</span></h1>
			
			<div class="primary col-md-8">
				<h2>Reserve a Unit</h2>
				
				<?php if (!empty($msg)) {
					echo "<h2>$msg</h2>";
				} ?>
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					
					<div class="form-group">
						<label for="submitName">Name</label>
						<input type="text" autofocus id="submitdName" placeholder="Enter your name" class="form-control">
					</div>
					<div class="form-group">
						<label for="submitEmail">Email Address</label>
						<input type="text" id="submitEmail" placeholder="Enter your email address" class="form-control">
					</div>
					<div class="form-group">
						<label for="submitEmail">Question or Comment</label>
						<textarea id="submitComment" rows="5" placeholder="Enter your comment" class="form-control"></textarea> 
					</div>
					<div class="form-group">
						<label for="submitButton" class="sr-only">Submit</label>
						<input id="submitButton" type="submit" value="Submit" class="btn btn-default">
					</div>
				</form>
			
			

			</div>
			<aside class="secondary col-md-4">
				  	<section>
					  	<?php include('assets/inc/widget_storage.html'); ?>
					</section>
					<section>
					  	<?php include('assets/inc/widget_garages.html'); ?>
					</section>
					<section>
					  	<?php include('assets/inc/widget_facility_map.html'); ?>
					</section>
			</aside>		
		</main>
		<?php include('assets/inc/footer.html'); ?>
		</div><!-- /.container -->
	<!--bower:js -->
	<!--endbower-->
	<script src="assets/js/scripts.js"></script>
</body>
</html>