<html>
<head>
<title>hotel</title>
<style type="text/css">
body{animation:bg 10s infinite alternate linear}

@keyframes bg{
	0%{background-color:cream;}
	50%{background-color:gold;}
	100%{background-color:cyan;}
}
#name{
	color:red;

background:url(bgimg1.jpg);
background-repeat:repeat;
animation:namediv 30s infinite linear alternate;

}
@keyframes namediv{
	from{background-position:0px;}
	to{background-position:1500px}
}
name{
	animation:name 10s infinite alternate linear;
}

@keyframes name{
	0%{text-shadow:5px 10px  black;}
	10%{text-shadow:5px 10px blue;}
	20%{text-shadow:5px 10px green;}
	30%{text-shadow:5px 10px orange;}
	40%{text-shadow:5px 10px yellow;}
	50%{text-shadow:5px 10px purple;}
	60%{text-shadow:5px 10px brown;}
	70%{text-shadow:5px 10px gold;}
	80%{text-shadow:5px 10px coral;}
	90%{text-shadow:5px 10px rust;}
	100%{text-shadow:5px 10px red;color:blue }
}
#menu{

}
.dcode{margin:10px;
color:red;
background:white;
width:400px;
height:400px;
border:5px solid white;
position: -webkit-sticky;
position:absolute;
padding:2px

top: 0px;
align:top;}

}

</style>
<script type="text/javascript">
//function myfun(){
	//document.write("hi");

</script>

 
<body>


<?php
function menu()
{
	
	echo "<div class=dcode><div style='border:2px solid black;width:45px;height:20px;'><a href='index.php' target='_self'>Back</a></div>
	      <hr>
		  <form method='post' action=personal_detail.php>
	  	 <input type='submit' value='Sign IN' name=customer >
		 </form>
		 <form method='post' action=profile.php>
		 <input type='submit' value='Update profile' name=profile>
		</form>
		
	
	</div>";
}
if(isset($_POST["menu"])){

//menu();
}

?>
<div id=menu style="width:100%;height:3%;">  
<form method="post" style="text-size:20%;display:inline;">
<input type=submit name=menu value=Menu  style="height:35px;width:70px;background:rgba(0,0,225,0.3);">
</form>

<form method='post' action=profile.php style="display:inline;">
<input type='submit' value='Update profile' name=profile style="height:35px;width:100px;background:rgba(0,0,225,0.3);">
</form>

<form method='post' action=personal_detail.php style="display:inline;">
<input type='submit' value='Sign IN' name=customer style="height:35px;width:70px;background:rgba(0,0,225,0.3);" >
</form>

 <form method="post" action=page2.php style="display:inline;" >
 <input type="submit" value="customer" name=customer style="height:35px;width:70px;background:rgba(0,0,225,0.3);"  >
</form>
</div>
 <br>
<div id=name style="font-size:150px"; align=center ><name>welcome To<br> Family Hotel</name></div><br>

<div style="width:100%;height:30%;background:white;">
</div>
<br> 
<div style="width:100%;height:30%;background:white;">
</div>
<hr/>

<div style="width:100%;height:50%;background:rgb(210, 151, 81);">
<br>
<br>
<hr color='green' width='80%'>
<div style='float:left;width:50%;height:70%;position:relative;left:10%'>

<p>Terms Of Use</p>
<p>Contact Us</p>
<p>Privacy Policy</P>
<p>Blogs</p>
<p>Press Room</p>
</div>
<div style='position:relative;right:10%;float:right;width:20%;'>

<div>Join our newsletter</div>
<form>
<input type=submit name='suscribe' value='SUBSCRIBE' style='width:60%;background:red;'/>
</form>
<p>Connect with us:</p>
<img src='minorimg/inst_logo.jpg' width='15%' style='border-radius:50%;'>
<img src='minorimg/fb_logo.jpg' width='15%' style='border-radius:50%;'>
<img src='minorimg/whatsapp_logo.jpg' width='15%' style='border-radius:50%;'>
<img src='minorimg/youtube1.jpg' width='15%' style='border-radius:50%;'>
</div>
<hr color='green' width='80%'>
</div>

</body>
<script>
$x=alert(" ","");
</script>


</html>