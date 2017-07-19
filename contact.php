<?php
/**
 * This example shows how to handle a simple contact form.
 */
$errors = [];
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('submitEmail', $_POST)) {
    date_default_timezone_set('Etc/UTC');
	
	function trim_value(&$value) {
   		 $value = trim($value);
   	}
   	
   	array_filter($_POST, 'trim_value');
	
	$keys = ['submitEmail','submitName','submitComment'];
    $errors = [];
    
    foreach($keys as $key) {
	   if(empty($_POST[$key]))
	    array_push($errors, $key);
    }
    
    if( sizeof($errors) ) {
	   
	   $msg = 'Please check the form for errors with the information provided';
	  
    } else {
		//filter
		$postfilter =   array(
            'submitEmail' 	=> 	array(
            	'filter' => FILTER_SANITIZE_EMAIL, 
				'flags' => !FILTER_FLAG_STRIP_LOW),    // removes tags. formatting code is encoded -- add nl2br() when displaying
            'submitName'	=> 	array(
            	'filter' => FILTER_SANITIZE_STRING, 
            	'flags' => FILTER_FLAG_STRIP_LOW),    // we are using this in the url
            'submitComment'		=>    array(
            	'filter' => FILTER_SANITIZE_STRING, 
            	'flags' => FILTER_FLAG_STRIP_LOW),    // we are using this in the url
        );
		
		$filtered_values = filter_var_array($_POST, $postfilter); 
		
		$msg = doMail($filtered_values);
		unset($_POST);
	}
}

function doMail($values) {
	  
    require 'src/lib/bower/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    //$mail = new PHPMailer(true); //enables error handling
    $mail->setFrom('do-not-reply@storageandgarages.com', 'Airport Storage & Garages');
    $mail->addAddress('hunter@sitekick.com', 'Hunter Williams');
  
    if ($mail->addReplyTo($values['submitEmail'], $values['submitName'])) {
        $mail->Subject = 'Website contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$values['submitEmail']}
Name: {$values['submitName']}
Message: {$values['submitComment']}
EOT;
        //Send the message, check for errors
        if ( !$mail->send() ) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
			return 'Sorry, something went wrong. Please try again later.';
        } else {
           	return 'Message sent! Thanks for contacting us.';
        }
    	 
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Reserve Storage | Airport Storage & Garages</title>
	<meta charset="utf-8">
	<meta description="Storage and large garages located in Newport News, VA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style.css" />
	<?php $page_url="http://www.storageandgarages.com/contact.php"; ?>
	<!--bower:css -->
	<!--endbower-->
</head>
<body class="interior contact">
	<div class="container-fluid">
		<?php include('assets/inc/header.html'); ?>
		<main>
			<div class="page-header row">
			<h1 class="col-sm-9">Contact Us</h1>
			<div class="col-sm-3 sharing-controls"><?php include('assets/inc/controls.php'); ?></div>
			</div>
			<div class="row primary-aside-wrap">
				<div class="primary col-md-8">
					<h2>Reserve a Unit</h2>
					<p>Complete all fields below to contact us by email.</p>
					<?php if (!empty($msg)) {
						echo "<h3>$msg</h3>";
					} ?>
					<form id="reserveForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
						
						<div class="form-group">
							<label for="submitName">Name</label>
							<input type="text" autofocus id="submitName" name="submitName" placeholder="Enter your name" class="form-control" value="<?php if ( isset($_POST['submitName']) ) echo $_POST['submitName']; ?>" required>
							<?php if ( in_array('submitName', $errors) ):?>
								<p class="warning">Please enter your Name</p>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="submitEmail">Email Address</label>
							<input type="email" id="submitEmail" name="submitEmail" placeholder="Enter your email address" class="form-control" value="<?php if ( isset($_POST['submitEmail']) ) echo $_POST['submitEmail']; ?>" required>
							<?php if ( in_array('submitEmail', $errors) ):?>
								<p class="warning">Please enter your Email Address</p>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="submitComment">Question or Comment</label>
							<textarea id="submitComment" name="submitComment" rows="5" placeholder="Enter your comment" class="form-control" required><?php if ( isset($_POST['submitComment']) ) echo $_POST['submitComment']; ?></textarea>
							<?php if ( in_array('submitComment', $errors) ):?>
								<p class="warning">Please enter your question or comment</p>
							<?php endif; ?> 
						</div>
						<div class="form-group">
							<label for="submitButton" class="sr-only">Submit</label>
							<input id="submitButton" type="submit" value="Submit" class="btn btn-default" required>
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
			</div><!--/.row-->		
		</main>
		<?php include('assets/inc/footer.html'); ?>
		</div><!-- /.container -->
	<!--bower:js -->
	<script src="src/lib/bower/jquery/dist/jquery.js"></script>
	<script src="src/lib/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<!--endbower-->
	<script src="assets/js/scripts.js"></script>
</body>
</html>