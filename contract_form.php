<html>


<?php
	
	if (isset($_POST['submit'])) {
		include_once "connection.php";
    $message = "Data Recorded Successfully";  
    $error= "Error!! Please insert valid inputs";

		$club_id = $_POST['club_id'];
		$club_name = $_POST['club_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$player_id = $_POST['player_id'];
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$designation = $_POST['designation'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $contract_amount = $_POST['contract_amount'];
        $serial_number = $_POST['serial_number'];
        $due_date = $_POST['due_date'];
        $payment_date = $_POST['payment_date'];
        $amount = $_POST['amount'];
        $witness1 = $_POST['witness1'];
        $witness2 = $_POST['witness2'];
		
		$sql = "INSERT INTO clubs (club_id,club_name,witness1,witness2,player_id) 
			VALUES ('".$club_id."','".$club_name."', '".$witness1."','".$witness2."','".$player_id."'); 
            
            
            INSERT INTO first_party (first_name, middle_name, last_name, player_id) 
			VALUES ('".$first_name."','".$middle_name."', '".$last_name."','".$player_id."'); 
            
            
            INSERT INTO second_party (player_id,f_name, m_name, l_name, designation) 
			VALUES ('".$player_id."','".$f_name."','".$m_name."', '".$l_name."','".$designation."'); 
            
            
            INSERT INTO contract_period (start_date, end_date, contract_amount,player_id) 
			VALUES ('".$start_date."','".$end_date."', '".$contract_amount."','".$player_id."'); 
            
            
            INSERT INTO payment_schedule (serial_number, due_date, payment_date, amount) 
			VALUES ('".$serial_number."','".$due_date."', '".$payment_date."','".$amount."')";
            
		if ($mysqli->multi_query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }
		
		$mysqli->close();
	}
?>
<div class="header">
  	<h2>Contract Form</h2>
  </div>
<head>
	<title>Contract Form</title>
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

<form action="contract_form.php" method="post">
<div class="input-group">
        <label>Club ID:</label>
        <input type="number" name="club_id" required>
</div>
       
<div class="input-group">
        <label>Club Name:</label>
        <input type="text" name="club_name" required>
</div> <br>
        <i><b>||First Party||</b></i><br><br>
        Name of the Player:<br>
<div class="input-group">
        First Name:
        <input type="text" name="first_name" required>
        
        Middle Name:
        <input type="text" name="middle_name">
        Last Name:
        <input type="text" name="last_name">
</div>
<div class="input-group">
        Player ID:
        <input type="number" name="player_id" required>
</div> <br>
        <b><i>||Second Party:||</i></b><br><br>
        Authorized Person:
<div class="input-group">
        First Name:
        <input type="text" name="f_name" required>
        
        Middle Name:
        <input type="text" name="m_name">

        Last Name:
        <input type="text" name="l_name">
</div> 
<div class="input-group">
        Designation:
        <input type="text" name="designation">
</div><br> 

        Contract Period:<br>
        Start Date:
        <input type="date" name="start_date" required>
        &emsp; 
        End Date:
        <input type="date" name="end_date" required>
        &emsp;
        Contract Amount:
        <input type="number" name="contract_amount" required>

		<br><br>
		Payment Schedule:<br>

<table>
<tr>
    <th>Serial Number: <input type="number" name="serial_number" required></th>
    <th>Due Date: <input type="date" name="due_date"></th>
    <th>Payment Date: <input type="date" name="payment_date"</th>
    <th>Amount: <input type="number" name="amount"></th>
</tr>
    
</table><br>

<div class="input-group">
        <label>Contract Witness 1:</label>
        <input type="text" name="witness1" required>
</div> 
<div class="input-group">
        <label>Contract Witness 2:</label>
        <input type="text" name="witness2">
</div> <br>
      	<div class="input-group">
  	<button type="submit" class="btn" name="submit">Submit</button>
  	</div>
	</form>

</body>
</html>