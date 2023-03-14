<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path = "header.php";
include_once("header.php");
?>
<html>

<head>
	<style>
		body {
			background-color: white;
		}
	</style>
</head>

<body>
	<div align="center">
		<legend>List of Staff</legend>
		<?php
		include_once("faclist.php");
		?>

		<div align="center">
			<legend>List of time</legend>
			<?php
			include_once("timelist.php");
			?>