<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>
<center>
	<img src="../img/File-Explorer-fluent-icon.png" width="500" alt="300">
	<br>
	<span class="btn btn-danger">
		<h1 style="color: white">Gestor de Archivos</h1>
	</span>
</center>
<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>