    <?php ini_set('display_errors', 'On'); ?>
    <HTML>
    <HEAD>
    <TITLE>Books</TITLE>
    </HEAD>
 
    <h1 align= "Center" >Search Results</h1>
	
    <BODY BGCOLOR="#5F04B4">
	<IMG SRC="Home.png" alt="image" height = "50"/>
    <a href="http://web.engr.oregonstate.edu/~arreguia/index.html">HOME</a>        
    <IMG SRC="Add.png" alt="image" height = "50" />
    <a href="http://web.engr.oregonstate.edu/~arreguia/add_book.html">Add Book</a>
	<hr/>
    <?php
   
    $today = date("Y-m-d");  
    $title = $_POST["title"];
	$author = $_POST["author"];
	$call_num = $_POST["call_num"];


    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");

    mysql_select_db("cs275_arreguia", $connection);
    if (!$connection){
    	die('Could not connect: ' . mysql_error());
    }
    $query = "SELECT *
	FROM book_info
	WHERE title = '$title' || author = '$author' || call_num = '$call_num'
  	 ";

    $result = mysql_query($query, $connection);

    print "Here is the searched book information. If blank such book is not in the system.<br> <br>";

	echo '<table BORDER="3" BORDERCOLOR=BLACK CELLSPACING="1" CELLPADDING="5" bgcolor="#CCCCCC">';
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

