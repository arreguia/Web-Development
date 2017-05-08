	<?php ini_set('display_errors', 'On'); ?>
    <HTML>
    <HEAD>
    <TITLE>Book Details</TITLE>
    </HEAD>
 
    <h1 align= "Center" >All Database Book Details</h1>
   
    <BODY BGCOLOR="#D8F6CE">
	<IMG SRC="Home.png" alt="image" height = "50"/>
    <a href="http://web.engr.oregonstate.edu/~arreguia/index.html">HOME</a>        
    <hr/>
    <?php

    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
    mysql_select_db("cs275_arreguia", $connection);
    if (!$connection){
    	die('Could not connect: ' . mysql_error());
    }
    $query = "SELECT *
	FROM book_info
  	 ";
  
    $result = mysql_query($query, $connection);

    echo 'The follwoing is a table with all the books currently in the database.<br> <br>';
    echo '<table BORDER="3" BORDERCOLOR=BLACK CELLSPACING="1" CELLPADDING="5" BGCOLOR="CCCCCC">';
		echo '<tr>';
		echo '<td align= "Center">' . "Title";
		echo '<td align= "Center">' . "Author";
		echo '<td align= "Center">' . "Call Number";
		echo '<td align= "Center">' . "Year Of Book";
		echo '<td align= "Center">' . "Catagory";
		echo '<td align= "Center">' . "Number Of Copies";
		echo '</td>';	   
    while($row = mysql_fetch_array($result))
        {
        echo '<tr>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['author'] . '</td>';
        echo '<td>' . $row['call_num'] . '</td>';
        echo '<td>' . $row['year'] . '</td>';
        echo '<td>' . $row['catagory'] . '</td>';
        echo '<td>' . $row['copy_num'] . '</td>';
		echo '</tr>';
    	}
    echo '</table>';
  
    

    ?>
    
    </BODY>
    </HTML>

