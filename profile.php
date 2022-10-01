<?php
//error_reporting(0);
?>

<html>
<style>
.imgdiv{
position:absolute;
left:80%;
top:10px;
align:center;

width:200px;
height:250px;
}
.img{
border-radius:50%;
border:3px solid blue;
overflow:hidden;
width:200px;
height:200px;
}
</style>
<body>
<br>
<br>

<br>
PROFILE PAGE
<br>
<br>
<form action='index.php' >
<input type='submit' value='previous_page'/>
</form>
<div class='imgdiv'>
<?php

	$servername="localhost";
	$username="root";
	$password="";
	$database="minor";
	$conn=mysqli_connect($servername,$username,$password,$database);
	
	$sql='select * from img';
	$res=mysqli_query($conn,$sql);
	
	$num = mysqli_num_rows($res);
	//echo $num;
    $res=mysqli_query($conn,"SELECT `photo` FROM `img` WHERE `S.No`='$num'");
	$row=mysqli_fetch_assoc($res);
	$a=$row['photo'];
	//echo ($a);
	echo "<div class='img';' ><img src=$a width='100%' height='100%'/></div>";
	
?>
<br>
<form method="post" action="" enctype="multipart/form-data">
<input type='file' name='img' value="selecl"/><br/>
<input type='submit' name='submit' value='update'/>
</form>
</div>
<?php 


if(isset($_POST['submit'])){
	$filename=$_FILES["img"]['name'];
	$filetmpname=$_FILES['img']['tmp_name'];
	$folder="minorimg/".$filename;
	//echo $folder."<br>";
	move_uploaded_file($filetmpname,$folder);
	
	//echo "<div class='img' ><img src='minorimg/$filename' align=center/></div>";
	global $res;
	if(strlen($folder)>9){
		echo "<br><br><br><br><br><br><p align='right' style='color:blue;'>Reload this page</p>";
		$sql=("INSERT INTO `img`( `photo`) VALUES ('$folder')");
		$res=mysqli_query($conn,$sql);
		

	}
/*	$sql='select * from img';
	$res=mysqli_query($conn,$sql);
	
	$num = mysqli_num_rows($res);
	echo $num;
	$res=mysqli_query($conn,"SELECT `photo` FROM `img` WHERE `S.No`='$num'");
	$row=mysqli_fetch_assoc($res);
	$a=$row['photo'];
	echo ($a);
	echo "<div class='img' ><img src=$a align=center/></div>";
*/
}
?>

</body>
</html>