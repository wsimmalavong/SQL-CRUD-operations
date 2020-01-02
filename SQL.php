<?php
$servername = "localhost";
$username = "wsimmala_wsimmal";
$password = "Werre789";
$database = "wsimmala_cps530";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
 print("failed");
 die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT subjects, locations, date_taken, urls FROM cps530lab ORDER BY date_taken ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 echo "<body bgcolor=\"#E6E6FA\"";
 echo "<div style=\"width:800px; margin:0 auto;\">";
 echo "<h1>SQL TABLE</h1>";

 while($row = $result->fetch_assoc()) {
 
 echo "<h3>Subject: " . $row["subjects"]. "| Location: " . $row["locations"]. "| Date: " . $row["date_taken"]. "</h3><br>";
 
 }
 echo "</div>";
} else {
 echo "0 results";
}

$sql = "SELECT subjects, locations, date_taken, urls FROM cps530lab ORDER BY date_taken ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 echo "<div style=\"width:800px; margin:0 auto;\">";
 while($row = $result->fetch_assoc()) {
 
    if ($row["locations"] == "Ontario"){
        echo "<img src = " . $row["urls"] . " \" " . "height = \"300\" width = \"300\" >";
        echo "<h1> Subject: <span style = \"color:blue;\">" . $row["subjects"] . "</span> Location:<span style = \"color:red;\"> " . $row["locations"] . "</span></h1>";
    }
 
 }
 echo "</div>";
 echo "</body>";
} 

else {
 echo "0 results";
}

?>
