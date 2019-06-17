<?php
error_reporting(E_ALL & ~E_NOTICE);
include_once('../service/dbcon.php');
session_start();
if (!isset($_SESSION['userid'])) {
	header("Location: ../login/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Yearly A/c - SAS</title>
</head>
<body style="padding-top: 3.8%;">
	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../semantic/dist/semantic.min.js"></script>
	
	
   <!-- SITE STRATS FROM HERE -->
   <!-- TOP MENU -->
    <div class="ui blue top fixed inverted menu" id="top-menu" style="height: 55px; z-index: 1000" >
   		<div class="item">
   			<img src="../media/logo2.png" style="height:130%; width: 180px;">
   		</div>
		<div class="item"><i class="calendar alternate icon"></i> Academic Year 2018-2019</div>

		
		<!-- <a class="item">Testimonials</a> -->
		
		<div class="right item" >
			<form class="ui form" method="post" action="../search/search_stu.php">
					<div class="field" style="position: relative;">	
						<div class="ui action input">
							<input name="input" placeholder="Search..." type="text">
							<div class="ui compact selection dropdown">
							  <input name="column" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Search By</div>
							  <div class="menu">
							    	<div class="item" data-value="admn">Admn</div>
									<div class="item" data-value="doa">D.O.Admn</div>
									<div class="item" data-value="class">Class</div>
									<div class="item" data-value="section">Sec</div>
									<div class="item" data-value="name">Name</div> 
									<div class="item" data-value="surname">Surname</div>
									<div class="item" data-value="dob">D.O.Birth</div>
									<div class="item" data-value="uid">Aadhar UID</div>
									<div class="item" data-value="religion">Religion</div>
									<div class="item" data-value="gender">Gender</div>
									<div class="item" data-value="caste">Caste</div>
									<div class="item" data-value="subcaste">Subcaste</div>
									<div class="item" data-value="childid">ChildID</div>
									<div class="item" data-value="f_name">Fr.Name</div>
									<div class="item" data-value="f_occup">Fr.Occup</div>
									<div class="item" data-value="f_qual">Fr.Qual</div>
									<div class="item" data-value="f_uid">Fr.UID</div>
									<div class="item" data-value="f_phno">Fr.Phno</div>
									<div class="item" data-value="address">Address</div>
									<div class="item" data-value="m_name">Mr.Name</div>
									<div class="item" data-value="m_occup">Mr.Occup</div>
									<div class="item" data-value="m_qual">Mr.Qual</div>
									<div class="item" data-value="m_uid">Mr.UID</div>
									<div class="item" data-value="m_tongue">Mr.Tongue</div>
									<div class="item" data-value="prev_school">Prev_School</div>
									<div class="item" data-value="idmark1">Idmark1</div>
									<div class="item" data-value="idmark2">Idmark2</div>
									<div class="item" data-value="hostel">Admn Type</div>
							  </div>
							</div>
							<button name="menu" type="submit" class="ui teal icon button"><i class="search icon"></i></button>
						</div>
					</div>
				</form>
		</div>

		<a class="item" href="<?php echo '../login/index.php?logout=true'; ?>"><i class="sign out alternate icon"></i>Log-out</a>
		<a class="item">
			<img class="ui avatar image" src="../media/user.png">
			<span><?php echo (isset($_SESSION['userid']))?$_SESSION['userid']:'GUEST'; ?></span>
		</a>
	</div>
	<!-- SIDE MENU -->
	<div class="ui bottom attached segment" >
	  	<div class="ui visible fixed inverted left vertical sidebar menu" id="sidebar" style="padding-top: 4%">
	  		<div class="ui styled inverted fluid accordion item">
			    
				<div>
					<a href="../dashboard/" class="item"><i class=" icon"></i><i class="dashboard icon"></i><b>Dashboard</b></a>
				</div>
				<div class="divider ui"></div>

			    <div>
				    <a class="title item">
				      Student
				      <i class="dropdown icon"></i>
				      <i class="users icon"></i>
				    </a>
				    <div class="content">
					    <a class="item" href="../student/stu_view.php">
					      <i class="user icon"></i>
					      View Admission
					    </a>
					    <a class="item" href="../student/stu_add.php">
					      <i class="user plus icon"></i>
					      New Admission
					    </a>
					    <a class="item" href="../student/stu_rem.php">
					      <i class="user times icon" ></i>
					      Remove Admission
					    </a>
				    </div>
				</div>

				<div>
				    <a class="title item">
				      Fee
				      <i class="dropdown icon"></i>
				      <i class="money icon"></i>
				    </a>
				    <div class="content">
				    	<a class="item" href="../fee/fee_pay.php">
					      <i class="rupee icon"></i>
					      Pay Fee
					    </a>
					    <a class="item" href="../fee/fee_view_admn.php">
					      <i class="info circle icon"></i>
					      View Fee Details
					    </a>
					    <a class="item"  href="../fee/fee_view_rcpt.php">
					      <i class="print icon"></i>
					      View/Print Reciept
					    </a>
				    </div>
				</div>


				<div>
				    <a class="title item">
				      Vehicle
				      <i class="dropdown icon"></i>
				      <i class="car icon"></i>
				    </a>
				    <div class="content">
				    	<a class="item" href="../vehicle/vehicle_add.php">
					      <i class="add icon"></i>
					      Add Vehicle
					    </a>
					    <a class="item" href="../vehicle/vehicle_stu_entry.php">
					      <i class="child icon"></i>
					      Student Entry
					    </a>
					    <a class="item"  href="../vehicle/vehicle_list.php">
					      <i class="print icon"></i>
					      Vehicles List
					    </a>
				    </div>
				</div>
				<div class="ui divider"></div>
				<div>
				    <a class="title item">
				      View/Print List
				      <i class="dropdown icon"></i>
				      <i class="file alternate icon"></i>
				    </a>
				    <div class="content">
				    	<a class="item" href="../list/class_list.php">
					      <i class="users icon"></i>
					      Class List
					    </a>
					    <a class="item" href="../list/caste_list.php">
					      <i class="users icon"></i>
					      Caste List
					    </a>
					    <a class="item"  href="../list/religion_list.php">
					      <i class="users icon"></i>
					       Religion List
					    </a>
					    <a class="item"  href="../list/vehi_bal_list.php">
					      <i class="car icon"></i>
					       Vehicle-Student List
					    </a>
				    </div>
				</div>
				<div>
				    <a class="title item" href="../search/search_stu.php">
				      Search
					  <i class="searh icon"></i>
				      <i class="search icon"></i>

				    </a>
				</div>
				

				<div>
				    <a class="title item">
				      Certificate
				      <i class="dropdown icon"></i>
				      <i class="certificate icon"></i>
				    </a>
				    <div class="content">
				    	<a class="item" href="../certificate/study_certificate.php">
					      <i class="certificate icon"></i>
					      Study Certificate
					    </a>
				    </div>
				</div>

				<div>
				    <a class="active title item">
				     Finance & Statistics
					  <i class="dropdown icon"></i>
				      <i class="calculator icon"></i>
				    </a>
				    <div class="active content">
				    	<a href="../finance/daily.php" class="item"><i class="calendar icon"></i>Daily A/c</a>
				    	<a href="../finance/monthly.php" class="item"><i class="calendar outline icon"></i>Monthly A/c</a>
				    	<a href="../finance/yearly.php" class="active item"><i class="calendar alternate icon"></i>Annual A/c</a>
				    </div>
				</div>
				<div class="ui divider"></div>
			
				<div>
				    <a class="item" href="../service/coming_soon.php">
				      <b>SMS</b>
					  <i class="searh icon"></i>
				      <i class="mail icon"></i>

				    </a>
				</div>
				<div>
				    <a class="item" href="../service/coming_soon.php">
				    <b>Attendance & Exams</b>
					  <i class="searh icon"></i>
				      <i class="pie chart icon"></i>
				    </a>

				</div>
				<div>
				    <a class="title item" >
				      Settings
					  <i class="dropdown icon"></i>
				      <i class="configure icon"></i>
				    </a>
				     <div class="content">
				    	<a href="../setting/class_wise_fee.php" class="item"><i class="edit icon"></i>Modify Class Fees</a>
				    	<a href="../setting/view_user.php" class="item"><i class="browser icon"></i>View Users</a>
				    	<a href="../setting/add_user.php" class="item"><i class="add user icon"></i>Add User</a>
				    	<a href="../setting/export_db.php" class="item"><i class="database icon"></i>Export Database</a>
				    	<a href="../setting/dev_info.php" class="item"><i class="spy icon"></i>Ask for Help</a>
				    </div>
				</div>

				

	  		</div>
	  	</div>
	  	<div class="pusher" style="position: relative;left:-20%; top: 5%; width:150%;" >
	  		<div class="ui raised very padded text container segment" style="position: relative; left: -10%; bottom:40%;">
	  			<!-- BOX CREATED HERE -->
	  			<div class="ui form error" id="notfound" style="display: none;">
					 <div class="ui error message">
					    <div class="header">Records Not Found</div>
					    <p>The following details are not found in the payment records.</p>
					 </div>
				</div>
				<h2 class="ui center aligned icon header">
					<i class="calendar alternate icon"></i>
				  		 Year-wise Financial List
				</h2>
				<form class="ui form" method="post" action="#">
						<div class="four wide field" style="position: relative; left:37%"><label>Year</label><input type="number" name="year" value="<?php echo(date('Y'));?>"></div>
						<button style="position:relative; left:44%" class="ui blue button" type="submit" name="show" >Show</button>

	            </form>

				<div class="ui segments" style="display: none; " id="table">
					<div class="ui segment">
	                        <h3 class="ui header" style="padding-left:30%">
	                            Year-wise Financial Details - <?php echo $_POST['year']; ?>
	                        </h3>
	                </div>
	                <div class="ui segment" style="overflow-x: auto;">
						<table class="ui definition collapsing table">
							<thead>
							    <tr>
									<th></th>
								    <th>Rcpt</th>
								    <th>Admn No</th>
								    <th>Term</th>
								    <th>Amount</th>
								    <th>Date & Time</th>
								    <th>Recieved by</th>
								</tr>
							</thead>
							<tbody>
								<?php
									error_reporting(E_ALL & ~E_NOTICE);
									include_once('../service/dbcon.php');
									if (isset($_POST['show']) || isset($_POST['generate'])) {
										$year = $_POST['year'];

										$query = "SELECT * FROM fee_rcpt WHERE YEAR(date_time)=$year";
										$res = mysqli_query($con,$query);
										$sl = 1;

										if ($numrows = mysqli_num_rows($res)) {
											while ($row = mysqli_fetch_array($res)) {
												echo "<tr>
														<td>".$sl++."</td>
														<td>".$row['rcpt_no']."</td>
														<td>".$row['admn']."</td>
														<td>".$row['term']."</td>
														<td>".$row['amount']."</td>
														<td>".$row['date_time']."</td>
														<td>".$row['paidto']."</td>
													</tr>";
											}
										}
										else{
											echo '<script type="text/javascript">document.getElementById("notfound").style.display="";</script>';
										}
										$query2 = "SELECT COUNT(*) count, sum(amount) sum, round(avg(amount),2) avg FROM fee_rcpt WHERE YEAR(date_time)=$year";
										$res2 = mysqli_query($con,$query2);
										$row2 = mysqli_fetch_array($res2);
									}
								?>
							</tbody>
						</table>
						
						<h4 style="padding-left: 32%; ">Total Payments<span style="padding-left: 10.7%">:</span>  <span style="padding-left: 8%"><?php echo "    ".$row2['count']; ?></span></h4>
                        <h4 style="padding-left: 27%;  position: relative; bottom: 15px ">Total Fees Collected <span style="padding-left: 8%;">:</span>  <span style="padding-left: 7%"><?php echo "    ".$row2['sum']."/- Rs"; ?></span></h4>
                        <h4 style="padding-left: 23%;  position: relative; bottom: 30px ">Average Fees Collected <span style="padding-left: 8%;">:</span>  <span style="padding-left: 7%"><?php echo "    ".$row2['avg']."/- Rs Per Term"; ?></span></h4>

						<?php
							if (isset($_POST['show']) && $numrows) {
								echo '<script type="text/javascript">document.getElementById("table").style.display = "";</script>';
							}
						?>

						<form class="ui form" method="post" action="#">
							<input type="hidden" name="year" value="<?php error_reporting(E_ALL & ~E_NOTICE); echo $_POST['year']; ?>">
							<div class="fields" >
						  		<button style="position: relative; left:25%" name="generate" type="submit" onclick="enable()" class="ui blue button"><i class="external share icon"></i>Generate</button>
						  		<?php
									error_reporting(E_ALL & ~E_NOTICE);
									include_once('../service/dbcon.php');
									$res = 0;

									if (isset($_POST['generate'])) {
										$year = $_POST['year'];
										echo '<script type="text/javascript">document.getElementById("table").style.display = "";</script>';
										$query = "SELECT * FROM fee_rcpt WHERE YEAR(date_time)=$year";
										$res = mysqli_query($con,$query);
										$fname = '../output/FinanceListOf'.$year.'-'.date('dMY').'.csv';

										$fp = fopen($fname,'w');

										while ($row = mysqli_fetch_assoc($res)) {
											fputcsv($fp, $row);
										}
										fclose($fp);
									}
								?>
						  		<a href="<?php echo $fname; ?>" style="position: relative; left:35%" id="download" class="<?php echo($res?'ui green button':'ui green disabled button'); ?>"><i class="download icon"></i>Download</a>

						  	</div>
						</form>
					</div>
				</div>

                
			</div>
			<div class="ui vertical footer segment form-page" style="height: 15px;">
			  <div class="ui container" style="text-align: center; position: relative; bottom:10px; right: 10%">
			    <span style="font-size: 11px;">Suman Michael 2018. All rights reserved</span>
			  </div>
			</div>
		</div>



<script type="text/javascript">
	$('.ui.accordion').accordion();
	$('.visible.example .ui.sidebar')
  .sidebar({
    context: '.visible.example .bottom.segment'
  })
  .sidebar('hide');

   $('.ui.dropdown')
  .dropdown()


$('.ui.sticky')
  .sticky({
    context: '#context'
  })
;

 $('.special.cards .image').dimmer({on: 'hover'});



</script>


</body>
</html>