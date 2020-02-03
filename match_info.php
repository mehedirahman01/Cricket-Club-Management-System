
<html>

<?php

      if (isset($_POST['submit'])) {
      	include_once "connection.php";
      	$error= "Error!! Please insert valid inputs";
      	$message = "Data Recorded Successfully";
      	$event_id = $_POST['e_id'];
		$venue_id = $_POST['v_id'];
		$dom = $_POST['Dom'];
		$match_id = $_POST['m_id'];
		$mom = $_POST['Mom'];
		$on_umpire1 = $_POST['umpire1'];
		$on_umpire2 = $_POST['umpire2'];
		$out_umpire3 = $_POST['umpire3'];
		

		$sql = "INSERT INTO match_info (event_id,venue_id,dom,match_id,mom,on_umpire1,on_umpire2,out_umpire3) 
			VALUES ('".$event_id."','".$venue_id."', '".$dom."','".$match_id."','".$mom."','".$on_umpire1."','".$on_umpire2."','".$out_umpire3."')"; 
			
			if ($mysqli->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }

		$mysqli->close();
	}
?>

<div class="header">
  	<h2>Match Information</h2>
  </div>


<head>
	<title>Match Info</title>
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

	<form action="match_info.php" method="post">
		Event ID: <input type="number" name="e_id" required><br><br>
		Venue ID: <input type="number" name="v_id"><br><br>
		Date of Match: <input type="date" name="Dom"><br><br>
		Match ID: <input type="number" name="m_id" required><br><br>
		Man of the Match: <input type="text" name="Mom" required><br><br>
		On Field Umpire 1: <input type="text" name="umpire1"><br><br>
		On Field Umpire 2: <input type="text" name="umpire2"><br><br>
		3rd Umpire: <input type="text" name="umpire3"><br><br>
		 
		<button type="submit" class="btn" name="submit">Submit</button>


			</form>

</body>
</html>