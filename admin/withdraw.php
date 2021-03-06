<?php
session_start();
require_once ('db.php"');
if($_SESSION['name'])
{
	$user = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Twitouch | Withdraw</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
	<link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="css/separate/vendor/bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu">
<?php require_once "inc/header.php" ;?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once "inc/sidebar.php" ;?>

<div class="page-content">
		<div class="container-fluid">
			<form method="POST">

			<section class="card">
				<div class="card-block">
					<div class="tbl-cell">
						<h3>Transfer Information</h3>
					</div>
					<div class="row">
						<div class="col-md-6">
				<form id="form-signin_v1" name="form-signin_v1" method="POST">
								<fieldset class="form-group">
									<label class="form-label">User ID</label>
									<input type="text" name="company_name" class="form-control" id="inputPassword" placeholder="">
								</fieldset>
								<fieldset class="form-group">
									<label class="form-label">Password</label>
									<input type="password" name="company_address" class="form-control" id="inputPassword"></input>
								</fieldset>
								<fieldset class="form-group">
									<label class="form-label">Payment Method</label>
									<select id="payment_select" class="form-control" name="payment_method" onchange="pick()" style="width:50%;float:left">
										<option>Admin</option>
										<option>Payoneer</option>
										<option>Skrill</option>
										<option>Perfect Money</option>
									</select>
								</fieldset>
								<fieldset class="form-group">
									<label class="form-label">Amount</label>
									<input type="text" name="web_link" class="form-control" id="inputPassword" placeholder="">
								</fieldset>
								<fieldset class="form-group">
									<label class="form-label">Message</label>
									<input type="text" name="fb_link" class="form-control" id="inputPassword" placeholder="">
								</fieldset>
						</div>
					</div>
						<div class="col-lg-4">
							<button type="submit" name="update" class="btn btn-rounded btn-success sign-up">Submit</button>
						</div>
					</div>
			</section>
			</form>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/html5-form-validation/jquery.validation.min.js"></script>
	<script>
		$(function() {
			/* ==========================================================================
			 Validation
			 ========================================================================== */

			$('#form-signin_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group'
					}
				}
			});

			$('#form-signin_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-error-text-block',
						display: 'block',
						insertion: 'prepend'
					}
				}
			});

			$('#form-signup_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});

			$('#form-signup_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>
<?php
}
else
{
header("location: login.php");
}
?>