<?php 
	// The folder in which the steps pages are located.
	$stepLocation = "steps/";
	// Initialise the variables with the default paths.
	$file = "step1.php";
	$page = "step1";
	
	// If the page value is set, load that page. If not, load the default page. (Step 1).
	if (isset($_GET['page']) && $_GET['page'] !== "") {
		$page = $_GET['page']; $file = $page.".php";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title and Metadata -->
	<title>Rowville</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets -->
	<link rel="apple-touch-icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/steps.css" />
	<link rel="stylesheet" type="text/css" href="css/step3.css" />
	<link rel="stylesheet" type="text/css" href="css/step4.css" />
	<script type="text/javascript" src="js/function.js"></script>

</head>
<body>

<!-- Include menu content -->
<?php include "content/menu.php"; ?>
<div id="good" class="good">
	<div class="content">
		<!-- Placeholder frame -->
		<?php
			// Load in the appropriate page content.
			include $stepLocation.$file;
		?>
	</div>
</div>


</body>
</html>