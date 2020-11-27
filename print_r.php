<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#login
	{
		width:400px;
		height:300px;
		margin:auto;
		background-color:#ffffff;
		margin-top:150px;
		border:0.5px solid black;
		box-shadow:4px 4px 15px black;
	}
#sbtn
	{
		width:300px;
		height:33px;
		margin-left:50px;
		margin-top:8px;
		border:0px;
		font-size:18px;
		border-radius:4px;
		background-color:#0272A6;
		color:white;
		cursor:hand;
	}
.text
{
	color: green;
	top:90px;
	font-size: 25px;
	text-align: center;
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

	<div id="login">
			<p class="text">Technophile Registration</p>
			<form method="post" action="print_recipt.php">	
				<p style="margin:0px;margin-left:50px;margin-top:55px;color:#0272A6;">Email ID</p>
				<input type="text" placeholder="something@example.com" name="studentemail" style="width:300px;height:40px;margin-left:50px;margin-top:5px;font-size:16px;padding-left:10px;border:0.5px solid #0272A6;" required="true" />	
				<input type="submit" id="sbtn" value="SUBMIT"/>
			</form>
		</div>
	
</body>
</html>
