<html>

<form action="player_profile.php" method="POST">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>

<div class="jenhome"><a href="/cricket_clubs/home.php" title="Home"><img src="http://api.ning.com:80/files/YpAEDK09C4*ID8ykSF2GmoAS4g0br3tbqLvDzA1NY3RcZzrv9HxsnBE1whmnfQMUkyzEMSGlTktXd0hS-K5f1w8xyv4layRL/jenhome.png" alt="Home" style="z-index:999;xg-p:fixed;top:208px;right:0px;"></a></div>
<script type="text/javascript" language="javascript">
x$(document).ready(function() {
if (x$("div.xg_widget_main_index_index").length > 0) {
x$('div.jenhome').css('display','none');
}
});
</script>

<div class="header">
    <h2>Player Profile</h2>
  </div>
<head>
    <title>Player Profile</title>
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
    width: 83%;
    margin-left: auto;
    margin-right: auto;
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

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT p.player_id,c.player_id,first_name,middle_name,last_name,father_name,mother_name,dob,club_name FROM players as p,clubs as c WHERE p.player_id='$query' and c.player_id='$query'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Father's Name</th>";
                echo "<th>Mother's Name</th>";
                echo "<th>Date Of Birth</th>";
                echo "<th>Present CLub</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['player_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['middle_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['father_name'] . "</td>";
                echo "<td>" . $row['mother_name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['club_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


<div class="header">
    <h2>Present Address</h2>
  </div>

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT t.player_id,pre_house_no,pre_location,pre_village_street,pre_thana,pre_district,pre_post_code FROM p_present_ad as t WHERE t.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>House No</th>";
                echo "<th>Location</th>";
                echo "<th>Village/Street</th>";
                echo "<th>Thana</th>";
                echo "<th>District</th>";
                echo "<th>Postal Code</th>";
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['pre_house_no'] . "</td>";
                echo "<td>" . $row['pre_location'] . "</td>";
                echo "<td>" . $row['pre_village_street'] . "</td>";
                echo "<td>" . $row['pre_thana'] . "</td>";
                echo "<td>" . $row['pre_district'] . "</td>";
                echo "<td>" . $row['pre_post_code'] . "</td>";
        
            echo "</tr>";
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


<div class="header">
    <h2>Permanent Address</h2>
  </div>

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT t.player_id,per_house_no,per_location,per_village_street,per_thana,per_district,per_post_code FROM p_permanent_ad as t WHERE t.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>House No</th>";
                echo "<th>Location</th>";
                echo "<th>Village/Street</th>";
                echo "<th>Thana</th>";
                echo "<th>District</th>";
                echo "<th>Postal Code</th>";
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['per_house_no'] . "</td>";
                echo "<td>" . $row['per_location'] . "</td>";
                echo "<td>" . $row['per_village_street'] . "</td>";
                echo "<td>" . $row['per_thana'] . "</td>";
                echo "<td>" . $row['per_district'] . "</td>";
                echo "<td>" . $row['per_post_code'] . "</td>";
        
            echo "</tr>";
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





<div class="header">
    <h2>Educational Qualifications</h2>
  </div>

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT q.player_id,degree_n,institute_dept,board_university,year,result FROM educational_q as q WHERE q.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Degree</th>";
                echo "<th>Institute/Department</th>";
                echo "<th>Board/University</th>";
                echo "<th>Year</th>";
                echo "<th>Result</th>";
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['degree_n'] . "</td>";
                echo "<td>" . $row['institute_dept'] . "</td>";
                echo "<td>" . $row['board_university'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['result'] . "</td>";
        
            echo "</tr>";
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<div class="header">
    <h2>Previous Performance</h2>
  </div>


<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT p.player_id,club_name,d_from,d_to,total_runs,total_wickets,team_leader,club_name2,d_from2,d_to2,total_runs2,total_wickets2,team_leader2 FROM p_previous_history as p WHERE p.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Club Name</th>";
                echo "<th>From</th>";
                echo "<th>To</th>";
                echo "<th>Total Runs</th>";
                echo "<th>Total WIckets</th>";
                echo "<th>Team Leader</th>";
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['club_name'] . "</td>";
                echo "<td>" . $row['d_from'] . "</td>";
                echo "<td>" . $row['d_to'] . "</td>";
                echo "<td>" . $row['total_runs'] . "</td>";
                echo "<td>" . $row['total_wickets'] . "</td>";
                echo "<td>" . $row['team_leader'] . "</td>";
        
            echo "</tr>";

            echo "<tr>";
                echo "<td>" . $row['club_name2'] . "</td>";
                echo "<td>" . $row['d_from2'] . "</td>";
                echo "<td>" . $row['d_to2'] . "</td>";
                echo "<td>" . $row['total_runs2'] . "</td>";
                echo "<td>" . $row['total_wickets2'] . "</td>";
                echo "<td>" . $row['team_leader2'] . "</td>";
        
            echo "</tr>";            
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<div class="header">
    <h2>Best Performance</h2>
  </div>


<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT p.player_id,c_name,oc_name,event_id,match_id,runs,wickets,c_name2,oc_name2,event_id2,runs2,wickets2 FROM p_b_performance as p WHERE p.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Club Name</th>";
                echo "<th>Opponent Club Name</th>";
                echo "<th>Event ID</th>";
                echo "<th>Match ID</th>";
                echo "<th>Runs</th>";
                echo "<th>Wickets</th>";
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['oc_name'] . "</td>";
                echo "<td>" . $row['event_id'] . "</td>";
                echo "<td>" . $row['match_id'] . "</td>";
                echo "<td>" . $row['runs'] . "</td>";
                echo "<td>" . $row['wickets'] . "</td>";
        
            echo "</tr>";

            echo "<tr>";
                echo "<td>" . $row['c_name2'] . "</td>";
                echo "<td>" . $row['oc_name2'] . "</td>";
                echo "<td>" . $row['event_id2'] . "</td>";
                echo "<td>" . $row['match_id2'] . "</td>";
                echo "<td>" . $row['runs2'] . "</td>";
                echo "<td>" . $row['wickets2'] . "</td>";
        
            echo "</tr>";
 }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


<div class="header">
    <h2>MEMBERSHIP Information</h2>
  </div>

<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$query = $_POST['query'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cricket_clubs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt select query execution
$sql = "SELECT p.player_id,membership,signature,hdate FROM players as p WHERE p.player_id='$query'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Membership Type</th>";
                echo "<th>Registration Date</th>";
                echo "<th>Signature</th>";
            
    

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['membership'] . "</td>";
                echo "<td>" . $row['hdate'] . "</td>";
                echo "<td>" . $row['signature'] . "</td>";
        
            echo "</tr>";
        }
        echo "</table>";

        
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



</html>