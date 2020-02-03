
<html>


<?php

      if (isset($_POST['submit'])) {
      	include_once "connection.php";
      	$message = "Data Recorded Successfully";  
    	$error= "Error!! Please insert valid inputs";	
		$club_name = $_POST['c_name'];
		$DoE = $_POST['doe'];
		$house_no = $_POST['h_no'];
		$location = $_POST['lo'];
		$village_street = $_POST['v_street'];
		$thana = $_POST['thana'];
		$district =$_POST['district'];
		$post_code =$_POST['p_code'];
		$name_president =$_POST['p_name'];

		$sql = "INSERT INTO club_reg (club_name,DoE,house_no,location,village_street,thana,district,post_code,name_president) 
			VALUES ('".$club_name."', '".$DoE."','".$house_no."', '".$location."','".$village_street."','".$thana."','".$district."','".$post_code."','".$name_president."')"; 
			
		if ($mysqli->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }


		$mysqli->close();
	}
?>
<div class="header">
  	<h2>Club Registration Form</h2>
  </div>

<head>
	<title>Club Registration</title>

<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}
.header {
  width: 80%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}

.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 20%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
        
        
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	
	<div class="jenhome"><a href="/cricket_clubs/home.php" title="Home"><img src="http://api.ning.com:80/files/YpAEDK09C4*ID8ykSF2GmoAS4g0br3tbqLvDzA1NY3RcZzrv9HxsnBE1whmnfQMUkyzEMSGlTktXd0hS-K5f1w8xyv4layRL/jenhome.png" alt="Home" style="z-index:999;xg-p:fixed;top:208px;right:0px;"></a></div>
<script type="text/javascript" language="javascript">
x$(document).ready(function() {
if (x$("div.xg_widget_main_index_index").length > 0) {
x$('div.jenhome').css('display','none');
}
});
</script>
	
	<form action="club_reg.php" method="post">
	
	<div class="input-group"><label>Club Name: </label><input type="text" name="c_name" required>
	</div>
		
	<div class="input-group"><label>Date of Establishment:</label> <input type="date" name="doe" required></div>
	<div class="input-group"><label>House No:</label> <input type="text" name="h_no" </div>
	<div class="input-group"><label>Location:</label> <input type="text" name="lo"></div>
	<div class="input-group"><label>Village street:</label> <input type="text" name="v_street"></div>
	<div class="input-group"><label>Thana: </label><input type="text" name="thana" required></div>
	<div class="input-group"><label>District: </label><input type="text" name="district" required></div>
	<div class="input-group"><label>Post Code: </label><input type="number" name="p_code"></div>
	<div class="input-group"><label>Name of the President: </label><input type="text" name="p_name" required></div>
		<button type="submit" class="btn" name="submit">Submit</button>


			</form>

</body>
</html>