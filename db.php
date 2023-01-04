<?php
$servername ="sql113.epizy.com";
$username ="epiz_33059947";
$password ="TMbmvZRN4eWL";
$dbname ="epiz_33059947_files";
$connection = mysqli_connect($servername, $username, $password, $dbname );
if ($conn->connect_error) {
    throw new Exeption('s');
  }

?>
