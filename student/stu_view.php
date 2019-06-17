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
	<title>View Student - SAS</title>
</head>
<body style="padding-top: 3.8%;">
	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../semantic/dist/semantic.min.js"></script>
	 <!-- SITE STRATS FROM HERE -->
	<script src="../node_modules/nanobar/nanobar.js"></script>
    <script type="text/javascript">
		  var options = {
		  classname: 'nanobar_class',
		  id: 'my-id',
		  target: document.getElementById('top-menu')
		};

		var nanobar = new Nanobar( options );

		// move bar
		nanobar.go( 30 ); // size bar 30%
		nanobar.go( 76 ); // size bar 76%

		// size bar 100% and and finish
		nanobar.go(100);
    </script>
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
				    <a class="active title item">
				      Student
				      <i class="dropdown icon"></i>
				      <i class="users icon"></i>
				    </a>
				    <div class="active content">
					    <a class="active item" href="../student/stu_view.php">
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
				    <a class="title item">
				     Finance & Statistics
					  <i class="dropdown icon"></i>
				      <i class="calculator icon"></i>
				    </a>
				    <div class="content">
				    	<a href="../finance/daily.php" class="item"><i class="calendar icon"></i>Daily A/c</a>
				    	<a href="../finance/monthly.php" class="item"><i class="calendar outline icon"></i>Monthly A/c</a>
				    	<a href="../finance/yearly.php" class="item"><i class="calendar alternate icon"></i>Annual A/c</a>
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
	  			<div class="ui form error" id="notfound" style="display: none;  position: relative; top: 5px;">
					 <div class="ui error message">
					    <div class="header">Admission Not Found</div>
					    <p>The following student is not found in the Admission records</p>
					 </div>
				</div>


	  			<h2 class="ui center aligned icon header">
				  <i class="user icon"></i>
				  View Student
				</h2>
				<form class="ui form" method="post" action="#">
					<div class="eight wide field">
					 	<div class="ui action input" style="position: relative; left: 50%;">
						  <input placeholder="Admission No..." name="admn" type="number" value="<?php echo($_POST['admn']?$_POST['admn']:''); ?>">
						  <button type="submit" name="submit" class="ui button">Search</button>
					  	</div>
				  	</div>

				  	<?php
						include_once('../service/dbcon.php');
						error_reporting(E_ALL & ~E_NOTICE);
						
						if (isset($_POST['submit'])) {
							include_once("../service/dbcon.php");
							$admn = $_POST['admn'];

							$search_stu_data = "SELECT * FROM stu_data WHERE admn = $admn";

							$result = mysqli_query($con,$search_stu_data);
							if (!$result) {
								echo "ERROR";
								}
							else {
								if (!($row = mysqli_fetch_array($result))){
									echo '<script type="text/javascript">document.getElementById("notfound").style.display="block";</script>';
								}
							}
						}
					?>

					<div class="fields">
						<div class = "six wide field" >
							<label>Date of Admission:</label>
							<input disabled="true" type="text" name="doa" placeholder="YYYY-MM-DD" value="<?php echo($row?$row['doa']:''); ?>">
						</div>
						<div class = "two wide field">
							<label>Class:</label>
							<input disabled="true" type="text" name="class" placeholder="Class" value="<?php echo($row?$row['class']:''); ?>">
						</div>
						<div class = "two wide field">
							<label>Section:</label>
							<input disabled="true" type="text" name="section" placeholder="Sec" value="<?php echo($row?$row['section']:''); ?>">
						</div>
						<div class = "six wide field" >
							<label>Admission Type:</label>
							<input disabled="true" type="text" name="hostel" placeholder="Admission Type" value="<?php echo($row?$row['hostel']:''); ?>">
						</div>

					</div>
					<div class="field">
					    <label>Name</label>
					    <div class="two fields">
					      <div class="field">
					        <input name="name" disabled="true" placeholder="Name" type="text" value="<?php echo($row?$row['name']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="surname" disabled="true" placeholder="Surname" type="text" value="<?php echo($row?$row['surname']:''); ?>">
					      </div>
					    </div>
					</div>
					<div class="fields">
						<div class = "seven wide field" >
							<label>Date of Birth:</label>
							<input type="text" name="dob" disabled="true" placeholder="YYYY-MM-DD" value="<?php echo($row?$row['dob']:''); ?>">
						</div>
						<div class = "nine wide field">
							<label>Aadhar UID:</label>
							<input type="text" name="uid" disabled="true" placeholder="XXXX XXXX XXXX" value="<?php echo($row?$row['uid']:''); ?>">
						</div>
					</div>
					<div class="three fields">
					      <div class="field">
					        <input name="religion" disabled="true"  placeholder="Religion" type="text" value="<?php echo($row?$row['religion']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="gender" disabled="true" placeholder="Gender" type="text" value="<?php echo($row?$row['gender']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="caste" disabled="true" placeholder="Caste" type="text" value="<?php echo($row?$row['caste']:''); ?>">
					      </div>
					 </div>
					<div class="fields">
						<div class = "six wide field">
							<label>Sub-Caste</label>
							<input type="text" disabled="true" name="subcaste" placeholder="Sub-Caste" value="<?php echo($row?$row['subcaste']:''); ?>">
						</div>
						<div class = "ten  wide field">
							<label>Child ID</label>
							<input type="text" disabled="true" name="childid" placeholder="Child ID" value="<?php echo($row?$row['childid']:''); ?>">
						</div>
					</div>
					<div class="field">
					    <label>Details of Father/Guardian:</label>
					    <div class="three fields">
					      <div class="field">
					        <input name="f_name" disabled="true" placeholder="Name" type="text" value="<?php echo($row?$row['f_name']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="f_occup" disabled="true" placeholder="Occupation" type="text" value="<?php echo($row?$row['f_occup']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="f_qual" disabled="true"  placeholder="Qualification" type="text" value="<?php echo($row?$row['f_qual']:''); ?>">
					      </div>
					    </div>
					</div>
					<div class="field">
					    <div class="two fields">
					      <div class="field">
					        <input type="text" disabled="true"  name="f_uid" placeholder="UID: XXXX XXXX XXXX" value="<?php echo($row?$row['f_uid']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="f_phno" disabled="true" placeholder="Phone number" type="text" value="<?php echo($row?$row['f_phno']:''); ?>">
					      </div>
					    </div>
					</div>
					<div class="field">
						<input type="text" name="address" disabled="true" placeholder="Residencial Address" value="<?php echo($row?$row['address']:''); ?>">
					</div>

					<div class="field">
					    <label>Details of Mother:</label>
					    <div class="three fields">
					      <div class="field">
					        <input name="m_name" disabled="true"  placeholder="Name" type="text" value="<?php echo($row?$row['m_name']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="m_occup" disabled="true"  placeholder="Occupation" type="text" value="<?php echo($row?$row['m_occup']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="m_qual" disabled="true" placeholder="Qualification" type="text" value="<?php echo($row?$row['m_qual']:''); ?>">
					      </div>
					    </div>
					</div>
					<div class="field">
					    <div class="two fields">
					      <div class="field">
					        <input type="text" disabled="true" name="m_uid" placeholder="UID: XXXX XXXX XXXX" value="<?php echo($row?$row['m_uid']:''); ?>">
					      </div>
					      <div class="field">
					        <input name="m_phno" disabled="true" placeholder="Phone number" type="text" value="<?php echo($row?$row['m_phno']:''); ?>">
					      </div>
					    </div>
					</div>
					<div class="field">
					    <label>Other Details:</label>
					    	<div class="fields">
						      <div class="five wide field">
						        <input name="m_tongue" disabled="true" placeholder="Mother Tongue" type="text" value="<?php echo($row?$row['m_tongue']:''); ?>">
						      </div>
						      <div class="eleven wide field">
						        <input name="prev_school" disabled="true" placeholder="Previous School" type="text" value="<?php echo($row?$row['prev_school']:''); ?>">
						      </div>
							</div>
					</div>
					<div class="fields">
							<div class="eight wide field">
								<input type="text" disabled="true" name="idmark1" placeholder="Identification Mark 1" value="<?php echo($row?$row['idmark1']:''); ?>">
							</div>	
							<div class="eight wide field">
								<input type="text" disabled="true"  name="idmark2" placeholder="Identification Mark 2" value="<?php echo($row?$row['idmark2']:''); ?>">
							</div>
					</div>

				<!-- SUCCESS FIELD -->
				
				<!--  -->
				<!-- SUCCEDD FIELD END -->
				
				</form>
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
;
	$('.ui.checkbox')
  .checkbox()
;

$('.ui.sticky')
  .sticky({
    context: '#context'
  })
;

  
</script>


</body>
</html>