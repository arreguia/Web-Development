\    <?php ini_set('display_errors', 'On'); ?>
    <HTML>
    <HEAD>
    <TITLE>Identification</TITLE>
    </HEAD>
 
    <h1 align= "Center" >Identification</h1>
	
    <BODY BGCOLOR="FF4500">
	<IMG SRC="Home.png" alt="image" height = "50"/>
    <a href="http://web.engr.oregonstate.edu/~arreguia/index.html">HOME</a> 
	<IMG SRC="Card.jpg" alt="image" height = "50"/>	
    <a href="http://web.engr.oregonstate.edu/~arreguia/create_card.html">Get Library Card</a>
	<hr/>
    <?php
    
    $today = date("Y-m-d");
    
    $name = $_POST["name"];
	$date_of_birth = $_POST["date_of_birth"];
	$email = $_POST["email"];

  
    $connection = mysql_connect("mysql.cs.orst.edu","cs275_arreguia","3834");
    mysql_select_db("cs275_arreguia", $connection);
    if (!$connection){
    	die('Could not connect: ' . mysql_error());
    }

    $query = "SELECT
			library_card.*, patron.*
			FROM library_card JOIN patron ON library_card.name = '$name' 
			AND library_card.email = '$email' 
			AND patron.date_of_birth = '$date_of_birth' 
			WHERE library_card.name = '$name' 
			AND library_card.email = '$email' 
			AND patron.date_of_birth = '$date_of_birth'
	
  	 ";
	
    
    $result = mysql_query($query, $connection);
	
    print "Here is your current information. If you don't have a library card please create one.<br> <br>";

	echo '<table BORDER="3" BORDERCOLOR=BLACK CELLSPACING="1" CELLPADDING="5" bgcolor="#CCCCCC">';
    echo '<tr>';
	echo '<td align= "Center">' . "ID";
    echo '<td align= "Center">' . "Name";
	echo '<td align= "Center">' . "Age";
    echo '<td align= "Center">' . "Date Of Birth";
    echo '<td align= "Center">' . "Status";
    echo '<td align= "Center">' . "Email";
    echo '<td align= "Center">' . "Address";
    echo '</td>';	   
    while($row = mysql_fetch_array($result) )
        {
        echo '<tr>';
		echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['age'] . '</td>';
		echo '<td>' . $row['date_of_birth'] . '</td>';
		echo '<td>' . $row['status'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['address'] . '</td>';
	echo '</tr>';
    	}


    
    ?>
	
    <Table>
			
			<form method="post" action="update3.php">	
							
							Please fill in everything.
							<TR>
                            <TD>
                            ID (On the table): <input type="text" name="id" /><br />
                            </TD>
                            </TR>
							
							<TR>
                            <TD>
                            Update Name: <input type="text" name="name" /><br />
                            </TD>
                            </TR>
							
							<TR>
                            <TD>
                            Update Status: <input type="text" name="status" /><br />
                            </TD>
                            </TR>	
									
							<TR>
                            <TD>
                            Update Email: <input type="text" name="email" /><br />
                            </TD>
                            </TR>	
							
							<TR>
                            <TD>
                            Update Address: <input type="text" name="address" /><br />
                            </TD>
                            </TR>	
							
                            <TR>
                            <TD>
                            <input type="submit" value="Submit">
                            </TD>
                            </TR>
			</form>
		</table>
    </BODY>
    </HTML>

