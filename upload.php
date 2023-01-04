<?php 
if(!empty($_FILES)){ 
    require 'db.php'; 
     
    $uploadDir = "uploads/"; 
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
        $sql = "INSERT INTO file (nazev)
        VALUES ('".$fileName."')";
        $connection->query($sql); 
    } 
} 
?>
 