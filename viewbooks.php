
    
    <HTML>
    <HEAD>
    <TITLE>Books At Library</TITLE>
    </HEAD>
 
    <h1 align= "Center" >Books In Library</h1>
   
    <BODY BGCOLOR="#ACFA58">

    <IMG SRC="Add.png" alt="image" height = "50" />
    <a href="http://web.engr.oregonstate.edu/~arreguia/add_book.html">Add Book</a>
        
    <IMG SRC="Minus.png" alt="image" height = "50" />
    <a href="http://web.engr.oregonstate.edu/~arreguia/remove_book.html">Remove Book</a>
    
    <IMG SRC="Info.png" alt="image" height = "50"/>
    <a href="http://web.engr.oregonstate.edu/~arreguia/book_info.php">Book Info</a>

    <IMG SRC="More.png" alt="image" height = "50"/>
    <a <a href="http://web.engr.oregonstate.edu/~arreguia/Search.html">Search Book</a>
    
    <IMG SRC="Home.png" alt="image" height = "50"/>
    <a href="http://web.engr.oregonstate.edu/~arreguia/index.html">HOME</a>        
    <hr/>

    <CENTER>Today is: 2013-06-10.</CENTER>
	<br><br>The following is a table with the books that are currently in the library. To add a book not found in the library please
			click on the link at the top left.<br><br>
	 <?php
   
    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
   
    mysql_select_db("cs275_arreguia", $connection);
  
    if (!$connection){
    	die('Could not connect: ' . mysql_error());
    }
  
    $query = "SELECT *
	FROM access
  	 ";
  
    $result = mysql_query($query, $connection);

  
    echo '<table BORDER="3" BORDERCOLOR=BLACK CELLSPACING="1" CELLPADDING="5" BGCOLOR="CCCCCC">';
    echo '<tr>';
    echo '<td align= "Center">' . "Title";
    echo '<td align= "Center">' . "Call Number";
    echo '<td align= "Center">' . "Floor";
    echo '<td align= "Center">' . "Section";
    echo '<td align= "Center">' . "Available";
    echo '</td>';	   
    while($row = mysql_fetch_array($result))
        {
        echo '<tr>';
	echo '<td>' . $row['title'] . '</td>';
	echo '<td>' . $row['call_num'] . '</td>';
        echo '<td>' . $row['floor'] . '</td>';
        echo '<td>' . $row['section'] . '</td>';
        echo '<td>' . $row['available'] . '</td>';
	echo '</tr>';
    	}
    echo '</table>';
  
    
    
    ?>

	</table>    
    </BODY>
    </HTML>
