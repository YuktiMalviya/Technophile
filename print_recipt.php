<?php
session_start();
$name=$_POST['studentemail'];
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
	}
	$sql = "select * from student where email='".$name."'";
				$retval = mysql_query( $sql, $conn );
				if(! $retval )
					{
						die('Could not get data: ' . mysql_error());
					}
				else
					{
						echo "<center><span style='color: green;top:90px;font-size: 25px;' class='text'>Technophile Registration</span></center>";
						if (mysql_num_rows($retval)==0) 
						{
							$_SESSION['INVALID'] = "yes";
							header("Location: index.php");
							exit;	
						}
						else
						{
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
							{	
								echo "
									
									<table>
									<tr>
									<td>
									<span class='text'>Tech ID</span>
									</td>
									<td>
									<span class='val'>#".$row['ID']."</span>
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
									<br><hr>";
							}
							echo "<br><span style='color: red;top: 160px;' class='text'>*Bring this receipt to the cordinators while payment.</span>";
						}
					}
?>