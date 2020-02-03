<html>
<script>
function toggleField(hideObj,showObj){
  hideObj.disabled=true;        
  hideObj.style.display='none';
  showObj.disabled=false;   
  showObj.style.display='inline';
  showObj.focus();
}



</script>



<?php
	
	if (isset($_POST['submit'])) {
		include_once "connection.php";
		$message = "Data Recorded Successfully";  
    	$error= "Error!! Please insert valid inputs";

		$first_name = $_POST['fn'];
		$middle_name = $_POST['mn'];
		$last_name = $_POST['ln'];
		$father_name = $_POST['fa_n'];
		$mother_name = $_POST['mo_n'];
		$pre_house_no = $_POST['prehn'];
		$pre_location = $_POST['prelo'];
		$pre_village_street = $_POST['previ'];
		$pre_thana = $_POST['pretha'];
		$pre_district = $_POST['predis'];
		$pre_post_code = $_POST['prepost'];
		$per_house_no = $_POST['perhn'];
		$per_location = $_POST['perlo'];
		$per_village_street = $_POST['pervi'];
		$per_thana = $_POST['pertha'];
		$per_district = $_POST['perdis'];
		$per_post_code = $_POST['perpost'];
		$club_name = $_POST['club_name'];
		$d_from = $_POST['d_from'];
		$d_to = $_POST['d_to'];
		$total_runs = $_POST['t_runs'];
		$total_wickets = $_POST['t_wickets'];
		$team_leader = $_POST['t_leader'];
		$club_name2 = $_POST['club_name2'];
		$d_from2 = $_POST['d_from2'];
		$d_to2 = $_POST['d_to2'];
		$total_runs2 = $_POST['t_runs2'];
		$total_wickets2 = $_POST['t_wickets2'];
		$team_leader2 = $_POST['t_leader2'];
		$c_name = $_POST['c_name'];
		$oc_name = $_POST['oc_name'];
		$event_id = $_POST['event_id'];
		$match_id = $_POST['match_id'];
		$runs = $_POST['runs'];
		$wickets = $_POST['wickets'];
		$c_name2 = $_POST['c_name2'];
		$oc_name2 = $_POST['oc_name2'];
		$event_id2 = $_POST['event_id2'];
		$match_id2 = $_POST['match_id2'];
		$runs2 = $_POST['runs2'];
		$wickets2 = $_POST['wickets2'];
		$dob = $_POST['dobt'];
		$degree_n = $_POST['dgn'];
		$institute_dept = $_POST['dept'];
		$board_university = $_POST['board'];
		$year = $_POST['year'];
		$result = $_POST['rslt'];
		$degree_n2 = $_POST['dgn2'];
		$institute_dept2 = $_POST['dept2'];
		$board_university2 = $_POST['board2'];
		$year2 = $_POST['year2'];
		$result2 = $_POST['rslt2'];	
		$membership = $_POST['membershi'];
		$signature = $_POST['sign'];
		$hdate = $_POST['hdate'];
		$sql = "INSERT INTO players (first_name, middle_name, last_name, father_name, mother_name, dob,membership,signature,hdate) 
			VALUES ('".$first_name."','".$middle_name."', '".$last_name."','".$father_name."', '".$mother_name."','".$dob."','".$membership."','".$signature."','".$hdate."'); INSERT INTO educational_q (degree_n, institute_dept, board_university, year, result,degree_n2, institute_dept2, board_university2, year2, result2) 
			VALUES ('".$degree_n."','".$institute_dept."', '".$board_university."','".$year."', '".$result."','".$degree_n2."','".$institute_dept2."', '".$board_university2."','".$year2."', '".$result2."'); INSERT INTO p_present_ad (pre_house_no, pre_location, pre_village_street, pre_thana, pre_district,pre_post_code) 
			VALUES ('".$pre_house_no."','".$pre_location."', '".$pre_village_street."','".$pre_thana."', '".$pre_district."', '".$pre_post_code."'); INSERT INTO p_permanent_ad (per_house_no, per_location, per_village_street, per_thana, per_district,per_post_code) 
			VALUES ('".$per_house_no."','".$per_location."', '".$per_village_street."','".$per_thana."', '".$per_district."', '".$per_post_code."'); INSERT INTO p_previous_history (club_name, d_from, d_to, total_runs, total_wickets,team_leader,club_name2, d_from2, d_to2, total_runs2, total_wickets2,team_leader2) 
			VALUES ('".$club_name."','".$d_from."', '".$d_to."','".$total_runs."', '".$total_wickets."', '".$team_leader."','".$club_name2."','".$d_from2."', '".$d_to2."','".$total_runs2."', '".$total_wickets2."', '".$team_leader2."'); INSERT INTO p_b_performance (c_name, oc_name, event_id, match_id, runs,wickets,c_name2, oc_name2, event_id2, match_id2, runs2,wickets2) 
			VALUES ('".$c_name."','".$oc_name."', '".$event_id."','".$match_id."', '".$runs."', '".$wickets."','".$c_name2."','".$oc_name2."', '".$event_id2."','".$match_id2."', '".$runs2."', '".$wickets2."')";

					
		if ($mysqli->multi_query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
    }


		
		$mysqli->close();
	}
?>
<div class="header">
  	<h2>Player Registration Form</h2>
  </div>
<head>

	<title>Player Registration Form</title>
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
	<form action="player_reg.php" method="post">
<div class="input-group">
        <label>First Name:</label>
        <input type="text" name="fn" required>
    	
    	<label>Middle Name:</label>
        <input type="text" name="mn">
    	
    	<label>Last Name:</label>
        <input type="text" name="ln">
</div>
<div class="input-group">
        <label>Father's Name:</label>
        <input type="text" name="fa_n" required>
</div>
<div class="input-group">
        <label>Mother's Name:</label>
        <input type="text" name="mo_n" required>
</div>
<div class="input-group">
        <label>Date of Birth:</label>
        <input type="date" name="dobt" required>
</div><br>
           
            <b><i>Present Address:</i></b><br>
            
<div class="input-group">
        House No:
        <input type="text" name="prehn">
		&emsp;
		Location:
        <input type="text" name="prelo">
		&emsp;
		Village/Street:
        <input type="text" name="previ">
</div>
<div class="input-group">
        Thana:
        <input type="text" name="pretha">
        &emsp;&emsp;&nbsp;&nbsp;
		District:
        <input type="text" name="predis" required>
        &emsp;&nbsp;&nbsp;
        Postal Code:
        <input type="number" name="prepost">
</div><br>
		
		<b>Permanent Address:</b><br>
<div class="input-group">
        House No:
       <input type="text" name="perhn">
       &emsp;
		Location:
       <input type="text" name="perlo">
       &emsp;
		Village/Street:
       <input type="text" name="pervi">
</div>

<div class="input-group">
        Thana:
       <input type="text" name="pertha">
		&emsp;&emsp;&nbsp;&nbsp;
	    District:
       <input type="text" name="perdis" required>
       &emsp;&emsp;&nbsp;&nbsp;
        Postal Code:
       <input type="number" name="perpost">
</div><br><br>

        <b>Previous History:</b> <br>
<table>
<tr>
        <th>Club Name:<br> <input type="text" name="club_name"></th>
		<th>From:<br> <input type="text" name="d_from"></th>
		<th>To:<br> <input type="text" name="d_to"></th>
		<th>Total runs:<br> <input type="number" name="t_runs"></th>
		<th>Total Wickets:<br> <input type="number" name="t_wickets"></th>
		<th>Leader:<br><select name="t_leader">
			<option value="Y">Yes</option>
			<option value="N">No</option>
		</select></th>
</tr>
<tr>
		<td><input type="text" name="club_name2"></td>
		<td><input type="text" name="d_from2"></td>
		<td><input type="text" name="d_to2"></td>
		<td><input type="number" name="t_runs2"></td>
		<td><input type="number" name="t_wickets2"></td>
		<td><select name="t_leader2">
			<option></option>
			<option value="Y">Yes</option>
			<option value="N">No</option>
		</select></td>
</tr>
</table><br><br>
		<b>Best Performance:</b><br><br>
<table>
<tr>
        <th>Club Name:<br> <input type="text" name="c_name"></th>
		<th>Opponent Club Name:<br> <input type="text" name="oc_name"></th>
		<th>Event Id:<br> <input type="number" name="event_id"></th>
		<th>Match Id:<br> <input type="number" name="match_id"></th>
		<th>Runs:<br> <input type="number" name="runs"></th>
		<th>Wickets:<br><input type="number" name="wickets"></th>
</tr>
<tr>
		<td><input type="text" name="c_name2"></td>
		<td><input type="text" name="oc_name2"></td>
		<td><input type="number" name="event_id2"></td>
		<td><input type="number" name="match_id2"></td>
		<td><input type="number" name="runs2"></td>
		<td><input type="number" name="wickets2"></td>
</tr>
</table><br><br>
		
		<b>Educational Qualifications:</b><br><br>
<table>
<tr>
        <th>Degree Name:<br> <input type="text" name="dgn"></th>
		<th>Institute/Dept:<br> <input type="text" name="dept"></th>
		<th>Board/University:<br> <input type="text" name="board"></th>
		<th>Year:<br> <input type="number" name="year"></th>
		<th>Result:<br> <input type="text" name="rslt"></th>
</tr>
<tr>
		<td><input type="text" name="dgn2"></td>
		<td><input type="text" name="dept2"></td>
		<td><input type="text" name="board2"></td>
		<td><input type="number" name="year2"></td>
		<td><input type="text" name="rslt2"></td>
</tr>
</table><br><br>


		Membership:  <select name="membershi" onchange="if(this.options[this.selectedIndex].value=='Others'){
              toggleField(this,this.nextSibling);
              this.selectedIndex='0';
          }">
  <option value="ICCB">ICCB</option>
  <option value="BCCB">BCCB</option>
  <option value="ACCB">ACCB</option>
  <option value="Others">Others</option>
  <input name="membershi" style="display:none;" disabled="disabled" 
            onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
</select> <br><br>
<div class="input-group">
        <label>Signature:</label>
       <input type="text" name="sign" required>
</div>
<div class="input-group">
        <label>Date:</label>
       <input type="date" name="hdate" required>
</div><br>
<div class="input-group">
  	<button type="submit" class="btn" name="submit">Submit</button>
  	</div>
		
	</form>

</body>
</html>