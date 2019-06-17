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
	<title>Add Student</title>
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
					    <a class="item" href="../student/stu_view.php">
					      <i class="user icon"></i>
					      View Admission
					    </a>
					    <a class="active item" href="../student/stu_add.php">
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
				    <a class="item" href="../search/search_stu.php">
				      <b>Search</b>
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
				    <a class="title item" href="../service/coming_soon.php">
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
	  			<div class="ui form success" id="success" style="display: none; border: 3px solid green; position: relative; top: 5px;">
					 <div class="ui success message">
					    <div class="header">Admission Accepted</div>
					    <p><?php echo $_POST['name']; ?> is inserted with Admission Number : <?php echo $_POST['admn']; ?></p>
					 </div>
				</div>
	  			<h2 class="ui center aligned icon header">
				  <i class="user plus icon"></i>
				  Add Student
				</h2>
				<form class="ui form" method="post" action="#">
					<div class="fields">
						<div class = "four wide field">
							<label>Admission No:</label>
							<input type="number" name="admn" placeholder="Admission No.">
						</div>
						<div class = "two wide field">
							<label>DD:</label>
							<input type="text" name="doa_dd" placeholder="DD">
						</div>
						<div class = "two  wide field">
							<label>MM:</label>
							<input type="text" name="doa_mm" placeholder="MM">
						</div>
						<div class = "three wide field">
							<label>YYYY:</label>
							<input type="text" name="doa_yyyy" placeholder="YYYY">
						</div>
						<div class="field" style="width:120px;">
							<label>Class:</label>
							<div class="ui selection fluid dropdown">
							  <input name="class" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Class</div>
							  <div class="menu">
							    <div class="item" data-value="NUR">NUR</div>
							    <div class="item" data-value="LKG">LKG</div>
							    <div class="item" data-value="UKG">UKG</div>
							    <div class="item" data-value="I">I</div>
							    <div class="item" data-value="II">II</div>
							    <div class="item" data-value="III">III</div>
							    <div class="item" data-value="IV">IV</div>
							    <div class="item" data-value="V">V</div>
							    <div class="item" data-value="VI">VI</div>
							    <div class="item" data-value="VII">VII</div>
							    <div class="item" data-value="VIII">VIII</div>
							    <div class="item" data-value="IX">IX</div>
							    <div class="item" data-value="X">X</div>
							  </div>
							</div>
						</div>
						<div class = "field" style="width:70px; position: relative; left:0%">
							<label>Section:</label>
							<div class="ui selection fluid dropdown">
							  <input name="section" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Sec:</div>
							  <div class="menu">
							    <div class="item" data-value="a">A</div>
							    <div class="item" data-value="b">B</div>
							    <div class="item" data-value="c">C</div>
							    <div class="item" data-value="d">D</div>
							  </div>
							</div>
						</div>
					</div>
					<div class="field">
					    <label>Name</label>
					    <div class="two fields">
					      <div class="field">
					        <input name="name" placeholder="Name" type="text">
					      </div>
					      <div class="field">
					        <input name="surname" placeholder="Surname" type="text">
					      </div>
					    </div>
					</div>
					<div class="fields">
						<div class = "two wide field">
							<label>DD:</label>
							<input type="text" name="dob_dd" placeholder="DD">
						</div>
						<div class = "two  wide field">
							<label>MM:</label>
							<input type="text" name="dob_mm" placeholder="MM">
						</div>
						<div class = "three wide field">
							<label>YYYY:</label>
							<input type="text" name="dob_yyyy" placeholder="YYYY">
						</div>
						<div class = "nine wide field">
							<label>Aadhar UID:</label>
							<input type="number" name="uid" placeholder="XXXX XXXX XXXX">
						</div>
					</div>
					<div class="fields">
						<div class="field">
							<div class="ui selection dropdown">
							  <input name="religion" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Religion</div>
							  <div class="menu">
							    <div class="item" data-value="hindu">Hindu</div>
							    <div class="item" data-value="christian">Christian</div>
							    <div class="item" data-value="muslim">Muslim</div>
							    <div class="item" data-value="other">Other</div>
							  </div>
							</div>
						</div>
						<div class="field">
							<div class="ui selection dropdown">
							  <input name="gender" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Gender</div>
							  <div class="menu">
							    <div class="item" data-value="male">Male</div>
							    <div class="item" data-value="female">Female</div>
							  </div>
							</div>
						</div>
						<div class="field" style="width:60%">
							<div class="ui selection fluid dropdown">
							  <input name="caste" type="hidden">
							  <i class="dropdown icon"></i>
							  <div class="default text">Caste</div>
							  <div class="menu">
							    <div class="item" data-value="st">ST</div>
							    <div class="item" data-value="sc">SC</div>
								<div class="item" data-value="bc">BC</div>
							    <div class="item" data-value="oc">OC</div>
							  </div>
							</div>
						</div>
					</div>
					<div class="fields">
						<div class = "six wide field">
							<label>Sub-Caste</label>
							<input type="text" name="subcaste" placeholder="Sub-Caste">
						</div>
						<div class = "ten  wide field">
							<label>Child ID</label>
							<input type="text" name="childid" placeholder="Child ID">
						</div>
					</div>
					<div class="field">
					    <label>Details of Father/Guardian:</label>
					    <div class="three fields">
					      <div class="field">
					        <input name="f_name" placeholder="Name" type="text">
					      </div>
					      <div class="field">
					        <input name="f_occup" placeholder="Occupation" type="text">
					      </div>
					      <div class="field">
					        <input name="f_qual" placeholder="Qualification" type="text">
					      </div>
					    </div>
					</div>
					<div class="field">
					    <div class="two fields">
					      <div class="field">
					        <input type="number" name="f_uid" placeholder="UID: XXXX XXXX XXXX">
					      </div>
					      <div class="field">
					        <input name="f_phno" placeholder="Phone number" type="number">
					      </div>
					    </div>
					</div>
					<div class="field">
						<input type="text" name="address" placeholder="Residencial Address">
					</div>

					<div class="field">
					    <label>Details of Mother:</label>
					    <div class="three fields">
					      <div class="field">
					        <input name="m_name" placeholder="Name" type="text">
					      </div>
					      <div class="field">
					        <input name="m_occup" placeholder="Occupation" type="text">
					      </div>
					      <div class="field">
					        <input name="m_qual" placeholder="Qualification" type="text">
					      </div>
					    </div>
					</div>
					<div class="field">
					    <div class="two fields">
					      <div class="field">
					        <input type="number" name="m_uid" placeholder="UID: XXXX XXXX XXXX">
					      </div>
					      <div class="field">
					        <input name="m_phno" placeholder="Phone number" type="number">
					      </div>
					    </div>
					</div>
					<label>Other Details:</label>
					<div class="fields">
						<div class="field">
							<div class="ui selection dropdown" id="select">
								  <input name="m_tongue" type="hidden">
								  <i class="dropdown icon"></i>
								  <div class="default text">Mother Tongue</div>
								  <div class="menu">
								    <div class="item" data-value="lambada">Lambada</div>
								    <div class="item" data-value="telugu">Telugu</div>
								    <div class="item" data-value="urdu">Urdu</div>
								    <div class="item" data-value="hindi">Hindi</div>
								    <div class="item" data-value="tamil">Tamil</div>
								    <div class="item" data-value="other">Other</div>
								  </div>
							</div>
						</div>
						<div class="eleven wide field">
							<input type="text" name="prev_school" placeholder="Previous School History">
						</div>
					</div>	
					<div class="fields">
							<div class="eight wide field">
								<input type="text" name="idmark1" placeholder="Identification Mark 1">
							</div>	
							<div class="eight wide field">
								<input type="text" name="idmark2" placeholder="Identification Mark 2">
							</div>
					</div>
					<br>
					<div class="inline field">
					    <div class="ui toggle checkbox">
					      <input tabindex="0" id="hostel" type="hidden" name="hostel" value="Day Scholar">
					      <input class="hidden" id="hostelhidden" tabindex="0" type="checkbox" name="hostel" value="Hostel">
					      <label>Hostel Accomodation</label>
					    </div>
					</div>

					<div class="ui basic modal" >
						  <div class="ui icon header">
						    <i class="times circle icon"></i>
						    ERROR
						  </div>
						  <div class="content">
						    <p style="text-align: center;" id="fail"></p>
						  </div>
						  <div class="actions">
						    <div class="ui red basic cancel inverted button">
						      <i class="remove icon"></i>
						      Close 
						    </div>
						  </div>
					</div>



 					<button class="ui button" style="position: relative; left: 42%; margin-top:2%;" type="submit" name="submit">Submit</button>
				<!-- SUCCESS FIELD -->
				<?php
						error_reporting(E_ALL & ~E_NOTICE);
						if (isset($_POST['submit'])) {
							$admn = $_POST['admn'];
							$doa = $_POST['doa_yyyy']."-".$_POST['doa_mm']."-".$_POST['doa_dd'];
							$class = $_POST['class'];
							$section = $_POST['section'];
							$name = $_POST['name'];
							$surname = $_POST['surname'];
							$dob = $_POST['dob_yyyy']."-".$_POST['dob_mm']."-".$_POST['dob_dd'];
							$uid = $_POST['uid'];
							$religion = $_POST['religion'];
							$gender = $_POST['gender'];
							$caste = $_POST['caste'];
							$subcaste = $_POST['subcaste'];
							$childid = $_POST['childid'];
							$f_name = $_POST['f_name'];
							$f_occup = $_POST['f_occup'];
							$f_qual = $_POST['f_qual'];
							$f_uid = $_POST['f_uid'];
							$f_phno = $_POST['f_phno'];
							$address = $_POST['address'];
							$m_name = $_POST['m_name'];
							$m_occup = $_POST['m_occup'];
							$m_qual = $_POST['m_qual'];
							$m_uid = $_POST['m_uid'];
							$m_phno = $_POST['m_phno'];
							$m_tongue = $_POST['m_tongue'];
							$prev_school = $_POST['prev_school'];
							$idmark1 = $_POST['idmark1'];
							$idmark2 = $_POST['idmark2'];
							$hostel = $_POST['hostel'];

							$add_stu_data  = "INSERT INTO stu_data (admn,doa,class,section,name,surname,dob,uid,religion,gender,caste,subcaste,childid,f_name,f_occup,f_qual,f_uid,f_phno,address,m_name,m_occup,m_qual,m_uid,m_phno,m_tongue,prev_school,idmark1,idmark2,hostel) VALUES ('$admn','$doa','$class','$section','$name','$surname','$dob','$uid','$religion','$gender','$caste','$subcaste','$childid','$f_name','$f_occup','$f_qual','$f_uid','$f_phno','$address','$m_name','$m_occup','$m_qual','$m_uid','$m_phno','$m_tongue','$prev_school','$idmark1','$idmark2','$hostel')";
							$add_stu_fee = "INSERT INTO stu_fee (admn,term1,term2,term3,term4) VALUES ('$admn',0,0,0,0)";

							$result = mysqli_query($con,$add_stu_data);
							$result2 = mysqli_query($con,$add_stu_fee);

							// SHOULD INCLUDE QUERY TO INITIALISE FEE TO ZERO

							if(!($result && $result2)){
								echo '<script type="text/javascript">$(".ui.basic.modal").modal("show"); document.getElementById("fail").innerHTML = "Description:'.mysqli_error($con).' "; </script>';
							}
							else{
								echo '<script type="text/javascript">document.getElementById("success").style.display="block";</script>';
							}

						}

						?>
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

if(document.getElementById("hostel").checked) {
    document.getElementById('hostelhidden').disabled = true;
}

</script>


</body>
</html>