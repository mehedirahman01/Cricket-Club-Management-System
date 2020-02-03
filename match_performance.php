
<html>

<?php

      if (isset($_POST['submit'])) {
      	include_once "connection.php";

      	$error= "Error!! Please insert valid inputs";
      	$message = "Data Recorded Successfully";
      	$match_id = $_POST['m_id'];
		$venue_id = $_POST['v_id'];
		$dom = $_POST['Dom'];
		$player1_id = $_POST['p_id1'];
		$tow1 = $_POST['t_w1'];
		$tor1 = $_POST['t_r1'];
		$out_p1 = $_POST['o_p1'];
		$player2_id =$_POST['p_id2'];
		$tow2 =$_POST['t_w2'];
		$tor2 =$_POST['t_r2'];
        $out_p2=$_POST['o_p2'];
        $player3_id = $_POST['p_id3'];
        $tow3=$_POST['t_w3'];
        $tor3=$_POST['t_r3'];
        $out_p3=$_POST["o_p3"];
		$sql = "INSERT INTO player_performance_match (match_id,venue_id,dom,player1_id,tow1,tor1,out_p1,player2_id,tow2,tor2,out_p2,player3_id,tow3,tor3,out_p3) 
			VALUES ('".$match_id."','".$venue_id."', '".$dom."','".$player1_id."', '".$tow1."','".$tor1."','".$out_p1."','".$player2_id."','".$tow2."','".$tor2."','".$out_p2."','".$player3_id."','".$tow3."','".$tor3."','".$out_p3."')"; 
			
			if ($mysqli->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }

		$mysqli->close();
	}
?>

<div class="header">
  	<h2>Players Performance in a Match</h2>
  </div>

<head>
	<title>Players Performance in a Match</title>
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

	<form action="match_performance.php" method="post">
		Match ID: <input type="number" name="m_id"><br><br>
		Venue ID: <input type="number" name="v_id"><br><br>
		Date of The Match: <input type="date" name="Dom"><br><br>
		1.Player ID: <input type="number" name="p_id1"> Total Wickets: <input type="number" name="t_w1"> Total Run: <input type="number" name="t_r1"> Outsatnding Performance <input type="text" name="o_p1"> <br><br>
		2.Player ID: <input type="number" name="p_id2"> Total Wickets: <input type="number" name="t_w2"> Total Run: <input type="number" name="t_r2"> Outsatnding Performance <input type="text" name="o_p2"> <br><br>
		3.Player ID: <input type="number" name="p_id3"> Total Wickets: <input type="number" name="t_w3"> Total Run: <input type="number" name="t_r3"> Outsatnding Performance <input type="text" name="o_p3"> <br><br>


		<button type="submit" class="btn" name="submit">Submit</button>


			</form>

</body>
</html>