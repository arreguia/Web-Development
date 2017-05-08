<?php
 
    $name = $_POST["name"];
    $age = $_POST["age"];
    $date_of_birth = $_POST["date_of_birth"];
    $status = $_POST["status"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $exp_date = $_POST["exp_date"];
	
    

    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");


    mysql_select_db("cs275_arreguia", $connection);



	
    $query = "INSERT INTO library_card VALUES ('','$exp_date', '$name', '$email', '$address');";
    $query2 = "INSERT INTO patron VALUES ('', '$name', '$age', '$date_of_birth','$status');";
	$result = mysql_query ($query, $connection);
	$result2 = mysql_query ($query2, $connection);
                    


    header("Location: http://web.engr.oregonstate.edu/~arreguia/Card_Created.html");               
   

    ?>

