<?php
session_start();
include_once ('../admin/db.php');
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
	<title>Twitouch | Account Inactive</title>

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
			<?php include "injection/account_inactive.php";?>
			<section class="card">
				<div class="card-block">
					<div class="tbl-cell">
						<h3>Membership Inactive</h3>
					</div>					
					<div class="row">
						<div class="col-md-6">
								<fieldset class="form-group">
									<label class="form-label">Username</label>
									<input type="text" name="username" class="form-control" id="inputPassword" placeholder="">
								</fieldset>
								<fieldset class="form-group">
									<label class="form-label">Password</label>
									<input type="password" name="password" class="form-control" id="inputPassword" placeholder="">
								</fieldset>
								<fieldset class="form-group">
									<button type="submit" name="submit" class="btn btn-rounded btn-success sign-up">Submit</button>
								</fieldset>
						</div>
						<div class="col-md-6">
							<div class="tbl-cell">
								<h3>Rules</h3>
							</div>
									<label class="form-label">Please Read Carefully</label>
									<ol>
										<li>You can inactive your account after 90 days of membership.</li>
										<li>If you inactive your account, your security deposit will be paid.</li>
										<li>25% will be deducted from your security deposit.</li>
										<li>You will be paid your security deposit within 48 hours.</li>
										<li>You have to withdraw all your balance before Inactive your account </li>
										<li>Your remaining balance, if you have, will not be paid after inactive your account. </li>
										<li>To reactive you’re account you have to pay $15 as security money and $5 as fine.</li>
									</ol>
						</div>
					</div><!--.row-->
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
header("location: ../auth.php");
}
?>