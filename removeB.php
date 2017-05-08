<?php 
 

    $call_num = $_POST["call_num"];
    $title = $_POST["title"];

 
    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
    mysql_select_db("cs275_arreguia", $connection);

 
    $query = "DELETE FROM  access WHERE call_num= '$call_num' ";
	$query2 = "DELETE FROM book_info WHERE call_num = '$call_num' ";
    $result = mysql_query ($query, $connection);
	$result2 = mysql_query ($query2, $connection);


    header("Location: http://web.engr.oregonstate.edu/~arreguia/Book_Removed.html");

 
    ?>

