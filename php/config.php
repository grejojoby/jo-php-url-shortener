<?php 


    $domain = "domain/"; //like this: codingnepalweb.com/
    $host = "hostname";
    $user = "dbuser"; //Database username
    $pass = "dbpass"; //Database password
    $db = "dbname"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();    
    }
?>