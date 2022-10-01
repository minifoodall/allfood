<htlm>
<head>
<title>forms</title>
<style type="text/css">
table tr{background:;}
#c2{
border:3px;cellspacing:0px;cellpadding:0px;
}
.i1{font-size:45px}
</style>
</head>

<body>

<form action=index.php>
<div><input type=submit value="Previous page"</div>
</form>
<form action="" method="post">


<table border="1px" cellspacing="10px" class="c2" cellpadding="5px">
<caption>Personal Details</caption>
<tr>
<td>Enter Name</td>
<td><input type="text" name=name title='name' ></td>
</tr>
<tr>
<td>Email_ID</td>
<td><input type="text" name=email></td>
</tr>

<tr>
<td>Contact_Number</td>
<td><input type="text" name=contact></td>
</tr>


<tr><td><input type="submit" name=submit>
</td></tr>

</table>

</form>
<div style="">
<?php

if(isset($_POST['submit']))
{
	if($_POST['name'])
	{
		if($_POST['email'])
		{
			if($_POST['contact'])
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];
				
				
				
				$servername="localhost";
				$username="root";
				$password="";
				$database="minor";
				$conn=mysqli_connect($servername,$username,$password,$database);
				$sql="INSERT INTO `details`( `Enter_Name`, `Email_ID`, `Contact_Number`) VALUES ('$name','$email','$contact')";
				$res=mysqli_query($conn,$sql);
				
				echo "<font color=green>Successfully Submited</font>";				
			}
			else
			{
				echo "<font color=red>Please,Enter yor Contact Number</font>";
			}
		}
		else
		{
			echo "<font color=red>Please,Enter yor Email ID</font>";
		}
	}
	else
	{
		echo "<font color=red>Please,Enter yor Name</font>";
	}
}

?>
</div>

 
</body>

</html>