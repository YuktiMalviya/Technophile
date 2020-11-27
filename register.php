<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css" media="all">
		@font-face
		{
			font-family: myfirstfont;
			src:url(../fonts/RobotoSlab-Regular.ttf);
		}
		.text
		{
			color: red;
			font-size: 20px;
			font-family: myfirstfont;
			margin-left: 50px;
			top: 100px;
			position: relative;
		}
		.val
		{
			color: blue;
			font-size: 20px;
			font-family: sans-serif;
			top: 100px;
			margin-left: 10px;
			position: relative;
		}
		#printtxt
		{
			float:right;
			text-decoration: underline;
		}
	</style>
	<style type="text/css" media="print">
		#printtxt
		{
			display: none;
		}
	</style>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
 $(document).bind("contextmenu",function(e){
   return false;
 });
});
	</script>
</head>
<body>
	<span id="printtxt" onclick="window.print();">Click To Print</span>
</body>
</html>

<?php
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phnumber=$_POST['phnumber'];
	$whnumber=$_POST['whnumber'];
	$college=$_POST['college'];
	$year=$_POST['year'];
	$branch = $_POST['branch'];
	$event1=$_POST['event1'];
	$event2=$_POST['event2'];
	$event3=$_POST['event3'];
	$event4=$_POST['event4'];

	if ($event1=="") 
	{
		$event1='NO';
	}

	if ($event2=="") 
	{
		$event2='NO';
	}
	if ($event3=="") 
	{
		$event3='NO';
	}
	if ($event4=="") 
	{
		$even4='NO';
	}

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	else
	{
		mysql_select_db("techno");
	
		$ins_query="INSERT INTO student (NAME,EMAIL,PHNUMBER,WHNUMBER,COLLEGE,YEAR,BRANCH,EVENT1,EVENT2,EVENT3,EVENT4) VALUES ('$name','$email','$phnumber','$whnumber','$college','$year','$branch','$event1','$event2','$event3','$event4')";
	
		$db_ins = mysql_query($ins_query);

		$code = mysql_insert_id();
	
		if ($db_ins==1) 
			{
				$_SESSION['LOGGEDIN']="registered";
				echo "<script> alert('Regsitered Succesfull.Click OK to print your Receipt.') </script>";
				$sql = 'SELECT * from student where id='.$code;
				$retval = mysql_query( $sql, $conn );
				if(! $retval )
					{
						die('Could not get data: ' . mysql_error());
					}
				else
					{
						while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
							{	
								echo "
									<center><span style='color: green;top:90px;font-size: 25px;' class='text'>Technophile Registration</span></center>
									<table>
									<tr>
									<td>
									<span class='text'>Tech ID</span>
									</td>
									<td>
									<span class='val'>".$code."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>Name</span>
									</td>
									<td>
									<span class='val'>".$row['NAME']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>Email Id</span>
									</td>
									<td>
									<span class='val'>".$row['EMAIL']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>Phone No</span>
									</td>
									<td>
									<span class='val'>".$row['PHNUMBER']."</span>
									</td>
									<td>
									<span class='text'>Whatsapp No</span>
									</td>
									<td>
									<span class='val'>".$row['WHNUMBER']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>College</span>
									</td>
									<td>
									<span class='val'>".$row['COLLEGE']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>Branch</span>
									</td>	
									<td>
									<span class='val'>".$row['BRANCH']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text'>Year</span>
									</td>
									<td>
									<span class='val'>".$row['YEAR']."</span>
									</td>
									</tr>
									</table>
									<table>
									<tr>
									<td>
									<span class='text'>Events :-</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text' style='color:blue;'>The_Bhram</span>
									</td>
									<td>
									<span class='text' style='color:red;'>".$row['EVENT1']."</span>
									</td>
									<td>
									<span class='text' style='color:blue;'>Code Sortie</span>
									</td>
									<td>
									<span class='text' style='color:red;'>".$row['EVENT2']."</span>
									</td>
									</tr>
									<tr>
									<td>
									<span class='text' style='color:blue;'>Yeildology</span>
									</td>
									<td>
									<span class='text' style='color:red;'>".$row['EVENT3']."</span>
									</td>
									<td>
									<span class='text' style='color:blue;'>Technology Quiz</span>
									</td>
									<td>
									<span class='text' style='color:red;'>".$row['EVENT4']."</span>
									</td>
									</tr>
									</table>
									<span style='color: orange;top: 160px;' class='text'>*Bring this receipt to the cordinators while payment.</span>";
							}
					}			
			}
		else
			{
				echo "Cannot Register You";
			}
	}
		

?>