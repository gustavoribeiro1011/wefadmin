<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php
//cabeçalho
include('inc/head.php'); 
include("functions.php");
?>

<body class="pt-4" style="margin-bottom: 32px;">


	<section class="container-fluid" id="section-navbar">
		<?php include("components/navbar/navbar.php"); ?>
	</section>

	<section class="container-fluid" id="section-dashboard">
		<?php include $_SERVER['DOCUMENT_ROOT'] . BASEURL ."pages/dashboard.php";?>
	</section>

	<section class="container-fluid" id="section-admin"></section>


</body>

</html>