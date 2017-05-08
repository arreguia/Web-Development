<?php
 
	$id = $_POST["id"];
    $name = $_POST["name"];
	$status = $_POST["status"];
	$email = $_POST["email"];
	$address = $_POST["address"];

  
    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
    mysql_select_db("cs275_arreguia", $connection);
    $query = "UPDATE patron
	SET  name = '$name', status = '$status'
	WHERE id ='$id';";
	
	$query2 = "UPDATE library_card
	SET name = '$name', email = '$email', address = '$address'
	WHERE id ='$id';";
    

    $result = mysql_query ($query, $connection);
	$result2 = mysql_query ($query2, $connection);
    header("Location: http://web.engr.oregonstate.edu/~arreguia/Info_Updated.html");

    ?>

