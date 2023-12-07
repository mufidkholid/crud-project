<!-- Mufid Kholid_50421852 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pweb_mufid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
