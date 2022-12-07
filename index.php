<?php require('config.php');?><!DOCTYPE html>
<html lang="pt-br">

<?php 
//cabeçalho
include('inc/head.php'); ?>


<body class="pt-4" style="margin-bottom: 32px;">

	<section class="container-fluid" id="section-navbar">		
		<?php include("components/navbar/navbar.php"); ?>
	</section>

	<?php 

	include("functions.php");

	echo '<script>$("#dashboard").css("display","none")</script>';
	
      include $_SERVER['DOCUMENT_ROOT'] . BASEURL ."pages/dashboard.php"; //inclui a página principal

      
      ?>

</body>
</html>