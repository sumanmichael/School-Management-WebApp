<?php
error_reporting(E_ALL & ~E_NOTICE);
include_once("../service/dbcon.php");
if (isset($_POST['search'])) {
	$rcpt = $_POST['rcpt'];
	$query1 = "SELECT * FROM fee_rcpt WHERE rcpt_no = $rcpt ";

	if ($row = mysqli_fetch_array(mysqli_query($con,$query1))) {
		$admn = $row['admn'];
		$term = $row['term'];
		$amount = $row['amount'];
		$descrip = $row['descrip'];
		$paidto = $row['paidto'];

		$data_query = "SELECT surname, name, f_name, d.class class, section, address,f.*,c.fee fee,(term1+term2+term3+term4) total, (c.fee-(term1+term2+term3+term4)) bal FROM stu_data d,stu_fee f,class_fee c WHERE d.admn = $admn AND f.admn = $admn AND c.class = d.class ";
			$p_row = mysqli_fetch_array(mysqli_query($con,$data_query));
		if (!$p_row) {
				echo "ERROR".mysqli_error();
			}
	}
	else{
		echo '<script type="text/javascript">',
				'alert("No Reciept Found");',
				'window.location.href="fee_view_rcpt.php"', 
				'</script>' ;
	}
}
?>

<!DOCTYPE html>
<html>
<style type="text/css">
	html,body{
		height: 210mm;
		width: 297mm;
	}
	b{
		font-size: 15px;
	}
</style>
<head>
	<title>
		INVOICE
	</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../semantic/dist/semantic.min.js"></script>

	
	<div class="ui grid">
		<div class="eight wide column">
			<div class="ui segment">
				<h2 class="ui center aligned container"><img src="../media/emblem.png" style="height: 8%; width: 8%; position:relative; top: 20px;"><span> Saint Agnes High School</span></h2>
				<p class="ui center aligned container" style="font-size: 10px; position: relative; bottom: 13px;">Dornakal(M), Mahabubabad(D).</p>
				<div class="ui center aligned container"><h2>FEE RECIEPT</h2></div>
				<div class="ui center aligned container"><h4>OFFICE COPY</h4></div>
				<br>
				<div class="ui divider" style="position: relative; bottom: 13px;"></div>
				<!-- BODY -->
				<div class="ui grid">
					<div class="ui eight wide column">
						<div class="ui left aligned container">
							<p>Admission No.: <b><?php echo $p_row['admn'];?></b></p>
							<p>Full Name: <b><?php echo $p_row['name'].' '. $p_row['surname'];?></b></p>
							<p>Father Name: <b><?php echo $p_row['f_name'];?></b></p>
							<p>Class: <b><?php echo $p_row['class'].'-'.$p_row['section'];?></b></p>
							<p>Address: <b><?php echo $p_row['address'];?></b></p>
						</div>
					</div>
					<div class="ui eight wide column">
						<div class="ui right aligned container">
							<p style="background-color: rgba(0,0,0,.1); padding:5px 5px 5px 0px;">Reciept No.: <b style="font-size: 25px;"><?php echo $rcpt; ?></b></p>
							<p>Date: <b><?php echo date('d/m/Y  h:i:s A'); ?></b></p>
							<img src="../media/user.png" style="height: 35%; width: 35%; position:relative; border: 2px solid #021a40; padding: 2px;">
						</div>
					</div>
				</div>
				<table class="ui definition table">
					<thead>
						<tr>
							<th></th>
							<th>Description</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td><?php echo "Paid <b>".$descrip."</b> as <b>".$term."</b> fee"; ?></td>
							<td><?php echo $amount." /-"; ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<div class="ui grid">
						<div class="four wide column"></div>
						<div class="eight wide column">
							<table class="ui table" style="text-align: center; ">
								<tbody>	
									<tr class="active" >
										<th style="padding: 3% 2% 3% 2% ">Class Fee</th>
										<th><?php echo $p_row['fee'].' /-';?></th>
									</tr>
									<tr class="ui header">
										<th style="padding: 3% 2% 3% 2% ">Paid Fee</th>
										<th><?php echo $amount.' /-';?></th>
									</tr>
									<tr class="active">
										<th style="padding: 3% 2% 3% 2% ">Balance</th>
										<th><?php echo $p_row['bal'].' /-';?></th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="four wide column"></div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="ui grid">
					<div class="eight wide column">
						<div class="ui left aligned container">
							Recieved by(<b><?php echo $paidto; ?></b>)
						</div>
					</div>
					<div class="eight wide column">
						<div class="ui right aligned container">
							Paid by or onbehalf of(<b><?php echo $p_row['f_name'];?></b>)
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- DUPLICATE -->
		<div class="eight wide column">
			<div class="ui segment">
				<h2 class="ui center aligned container"><img src="../media/emblem.png" style="height: 8%; width: 8%; position:relative; top: 20px;"><span> Saint Agnes High School</span></h2>
				<p class="ui center aligned container" style="font-size: 10px; position: relative; bottom: 13px;">Dornakal(M), Mahabubabad(D).</p>
				<div class="ui center aligned container"><h2>FEE RECIEPT</h2></div>
				<div class="ui center aligned container"><h4>PARENT COPY</h4></div>
				<br>
				<div class="ui divider" style="position: relative; bottom: 13px;"></div>
				<!-- BODY -->
				<div class="ui grid">
					<div class="ui eight wide column">
						<div class="ui left aligned container">
							<p>Admission No.: <b><?php echo $p_row['admn'];?></b></p>
							<p>Full Name: <b><?php echo $p_row['name'].' '. $p_row['surname'];?></b></p>
							<p>Father Name: <b><?php echo $p_row['f_name'];?></b></p>
							<p>Class: <b><?php echo $p_row['class'].'-'.$p_row['section'];?></b></p>
							<p>Address: <b><?php echo $p_row['address'];?></b></p>
						</div>
					</div>
					<div class="ui eight wide column">
						<div class="ui right aligned container">
							<p style="background-color: rgba(0,0,0,.1); padding:5px 5px 5px 0px;">Reciept No.: <b style="font-size: 25px;"><?php echo $rcpt; ?></b></p>
							<p>Date: <b><?php echo date('d/m/Y  h:i:s A'); ?></b></p>
							<img src="../media/user.png" style="height: 35%; width: 35%; position:relative; border: 2px solid #021a40; padding: 2px;">
						</div>
					</div>
				</div>
				<table class="ui definition table">
					<thead>
						<tr>
							<th></th>
							<th>Description</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td><?php echo "Paid <b>".$descrip."</b> as <b>".$term."</b> fee"; ?></td>
							<td><?php echo $amount." /-"; ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<div class="ui grid">
						<div class="four wide column"></div>
						<div class="eight wide column">
							<table class="ui table" style="text-align: center; ">
								<tbody>	
									<tr class="active" >
										<th style="padding: 3% 2% 3% 2% ">Class Fee</th>
										<th><?php echo $p_row['fee'].' /-';?></th>
									</tr>
									<tr class="ui header">
										<th style="padding: 3% 2% 3% 2% ">Paid Fee</th>
										<th><?php echo $amount.' /-';?></th>
									</tr>
									<tr class="active">
										<th style="padding: 3% 2% 3% 2% ">Balance</th>
										<th><?php echo $p_row['bal'].' /-';?></th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="four wide column"></div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="ui grid">
					<div class="eight wide column">
						<div class="ui left aligned container">
							Recieved by(<b><?php echo $paidto; ?></b>)
						</div>
					</div>
					<div class="eight wide column">
						<div class="ui right aligned container">
							Paid by or onbehalf of(<b><?php echo $p_row['f_name'];?></b>)
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>

