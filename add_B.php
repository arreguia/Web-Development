<?php ini_set('display_errors', 'On');
 
	
    $title = $_POST["title"];
	$author = $_POST["author"];
    $call_num = $_POST["call_num"];
    $year = $_POST["year"];
    $catagory = $_POST["catagory"];
    $copy_num = $_POST["copy_num"];
	$i = rand(1,6);
	$floor = $i;
	$available = 'Yes';
	$section = chr(ord($call_num{0})).chr(ord($call_num{1}));

    

    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
    mysql_select_db("cs275_arreguia", $connection);

 
    $query = "INSERT INTO book_info VALUES ('$title','$author', '$call_num', '$year', '$catagory', $copy_num );";
	$query2 = "INSERT INTO access VALUES ('$title', '$call_num', $floor, '$section', '$available');";
    $result = mysql_query ($query, $connection);
	$result2 = mysql_query ($query2, $connection);

    header("Location: http://web.engr.oregonstate.edu/~arreguia/Book_Added.html");               
   

    ?>

