<?php	
	$conn=mysqli_connect("localhost","root","");
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_select_db($conn,"cse");
	$result=mysqli_query($conn,"select * from placement_info");
	//$row = mysql_fetch_array($result);
	//echo(" <body style='background-color:MistyRose'>");
    echo(" <h1 align='center' style='color:red'> DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING </h1>\n ");
	echo(" <h2 align='center' style='color:blue'> Placements information </h2> ");
	
	if(!$result)
	{
		echo mysqli_error($conn);
		exit;
	}
    else
    {
		
        echo " <table border='5' align='center' cellpadding='10px' style='width:50%' > 
		
		       <tr>
		       <th style='color:SlateBlue'> company name </th>
			   <th style='color:SlateBlue'> package </th>
			   <th style='color:SlateBlue'> number of students placed </th>
               </tr>			   ";
		while( $row=mysqli_fetch_array($result))
		{
			$r=$row[1]." lakhs";
          echo "<tr>		
		        <td align='center'> $row[0] </td>
		        <td align='center'> $r</td>
				<td align='center'> $row[2] </td>
		        </tr>" ;
		  
		        
		}
		echo"</table>";
		//echo(" <h2 align='center' style='color:blue'> average package</h2> ");
		echo"</body>";
	}
		
?>
