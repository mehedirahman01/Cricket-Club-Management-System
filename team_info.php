<html>



<?php



if (isset($_POST['submit'])) {
      	include_once "connection.php";

      	$message = "Data Recorded Successfully";  
		$error= "Error!! Please insert valid inputs";



      	$club_id = $_POST['c_id'];
		$DTF = $_POST['dtf'];
		$event_name = $_POST['e_name'];
		$t_leader_id = $_POST['t_l_id'];
		$leader_name = $_POST['l_name'];
		$coach_id = $_POST['co_id'];
		$coach_name = $_POST['co_name'];
		$player1_id =$_POST['p1_id'];
		$player1_name =$_POST['p1_name'];
		$player2_id =$_POST['p2_id'];
		$player2_name =$_POST['p2_name'];
		$player3_id =$_POST['p3_id'];
		$player3_name =$_POST['p3_name'];
		$player4_id =$_POST['p4_id'];
		$player4_name =$_POST['p4_name'];
		$player5_id =$_POST['p5_id'];
		$player5_name =$_POST['p5_name'];
		$player6_id =$_POST['p6_id'];
		$player6_name =$_POST['p6_name'];
		$player7_id =$_POST['p7_id'];
		$player7_name =$_POST['p7_name'];
		$player8_id =$_POST['p8_id'];
		$player8_name =$_POST['p8_name'];
		$player9_id =$_POST['p9_id'];
		$player9_name =$_POST['p9_name'];
		$player10_id =$_POST['p10_id'];
		$player10_name =$_POST['p10_name'];
		$player11_id =$_POST['p11_id'];
		$player11_name =$_POST['p11_name'];
		$player12_id =$_POST['p12_id'];
		$player12_name =$_POST['p12_name'];
		$player13_id =$_POST['p13_id'];
		$player13_name =$_POST['p13_id'];
		$player14_id =$_POST['p14_id'];
		$player14_name =$_POST['p14_name'];
		$player15_id =$_POST['p15_id'];
		$player15_name =$_POST['p15_name'];


         $sql = "INSERT INTO team_info (club_id,DTF,event_name,t_leader_id,leader_name,coach_id,coach_name,player1_id,player1_name,player2_id,player2_name,player3_id,player3_name,player4_id,player4_name,player5_id,player5_name,player6_id,player6_name,player7_id,player7_name,player8_id,player8_name,player9_id,player9_name,player10_id,player10_name,player11_id,player11_name,player12_id,player12_name,player13_id,player13_name,player14_id,player14_name,player15_id,player15_name) 
		VALUES ('".$club_id."','".$DTF."','".$event_name."','".$t_leader_id."','".$leader_name."','".$coach_id."','".$coach_name."','".$player1_id."','".$player1_name."','".$player2_id."','".$player2_name."','".$player3_id."','".$player3_name."','".$player4_id."','".$player4_name."','".$player5_id."','".$player5_name."','".$player6_id."','".$player6_name."','".$player7_id."','".$player7_name."','".$player8_id."','".$player8_name."','".$player9_id."','".$player9_name."','".$player10_id."','".$player10_name."','".$player11_id."','".$player11_name."','".$player12_id."','".$player12_name."','".$player13_id."','".$player13_name."','".$player14_id."','".$player14_name."','".$player15_id."','".$player15_name."')"; 


		if ($mysqli->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }
		
		$mysqli->close();
	}
?>

<div class="header">
  	<h2>Team Information Form</h2>
  </div>


<head>
	<title>Team Information Form</title>
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
	<form action="team_info.php" method="post">
		
		<div class="input-group">
		<label>Club ID:
			<input type="number" name="c_id" required><br><br>
		</label>
		<div>

		Team Formation Date: <input type="date" name="dtf" required><br><br>
		Event Name: <input type="text" name="e_name" required><br><br>
		Team Leader's ID: <input type="number" name="t_l_id" required><br><br>
		Team Leaders Name: <input type="text" name="l_name" required><br><br>
		Coach ID: <input type="number" name="co_id" required><br><br>
		Coach Name: <input type="text" name="co_name" required><br><br>
		1.Player Id: <input type="number" name="p1_id"> &emsp; Player Name :<input type="text" name="p1_name"><br><br>
		2.Player Id: <input type="number" name="p2_id"> &emsp;Player Name :<input type="text" name="p2_name"><br><br>
		3.Player Id: <input type="number" name="p3_id"> &emsp;Player Name :<input type="text" name="p3_name"><br><br>
		4.Player Id: <input type="number" name="p4_id"> &emsp;Player Name :<input type="text" name="p4_name"><br><br>
		5.Player Id: <input type="number" name="p5_id"> &emsp;Player Name :<input type="text" name="p5_name"><br><br>
		6.Player Id: <input type="number" name="p6_id"> &emsp;Player Name :<input type="text" name="p6_name"><br><br>
		7.Player Id: <input type="number" name="p7_id"> &emsp;Player Name :<input type="text" name="p7_name"><br><br>
		8.Player Id: <input type="number" name="p8_id"> &emsp;Player Name :<input type="text" name="p8_name"><br><br>
		9.Player Id: <input type="number" name="p9_id"> &emsp;Player Name :<input type="text" name="p9_name"><br><br>
		10.Player Id: <input type="number" name="p10_id"> &emsp;Player Name :<input type="text" name="p10_name"><br><br>
		11.Player Id: <input type="number" name="p11_id"> &emsp;Player Name :<input type="text" name="p11_name"><br><br>
		12.Player Id: <input type="number" name="p12_id"> &emsp;Player Name :<input type="text" name="p12_name"><br><br>
		13.Player Id: <input type="number" name="p13_id"> &emsp;Player Name :<input type="text" name="p13_name"><br><br>
		14.Player Id: <input type="number" name="p14_id"> &emsp;Player Name :<input type="text" name="p14_name"><br><br>
		15.Player Id: <input type="number" name="p15_id"> &emsp;Player Name :<input type="text" name="p15_name"><br><br>
		
		<div class="input-group">
  	<button type="submit" class="btn" name="submit">Submit</button>
  	</div>


			</form>

</body>
</html>