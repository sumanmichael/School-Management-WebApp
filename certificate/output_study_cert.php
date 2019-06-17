<?php
error_reporting(E_ALL & ~E_NOTICE);
include_once('../service/dbcon.php');

$admn = $_POST['admn'];
$query = "SELECT name,surname,class,section,dob FROM stu_data WHERE admn = $admn";

if (!$row = mysqli_fetch_array(mysqli_query($con,$query))) {
	echo "Admission Number Not Found";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDY CERIFICATE</title>
</head>
<body >
	<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="../semantic/dist/semantic.min.js"></script>

	<script type="text/javascript">
		function printDiv(elem) {
			document.getElementById("but").style.display = "none";
		    window.print();
		}
	</script>
	
	<div class="ui segment" style="background-image: url('../media/cert_border.jpg'); height: 760px; width:595px; background-size: contain;">
		<div id="print">
			<br>
			<br>
			<br>
			<br>
			<br>
			<h3 style="position: relative;left:50%;"><?php echo $row['name'].' '.$row['surname']; ?></h3>
			<h3 style="position: relative;left:60%;top:8px;"><?php echo $row['class'].'-'.$row['section']; ?></h3>
			<h3 style="position: relative;left:26%;top: -15px;"><?php echo $row['dob']; ?></h3>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<button class="ui button" id="but" style="position: relative;left:45%" onclick="printDiv('print')">PRint</button>
	</div>
</body>
</html>