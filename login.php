<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","id15181466_trapotourdb","NSBMply20.1SE","id15181466_trapotourdatabase");
	$result = mysqli_query($conn,"SELECT usertype FROM users WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo '<script>alert("Wrong Usarname or Password")</script>';
	} 
	else 
	{
		$retval = mysql_query( $result, $conn );
		
		while($row = mysql_fetch_assoc($retval)) {
			$userType = {$row['usertype']};
   		}
   
		if($userType=="T"){
			header("Location: ......");
		}
		if($userType=="G"){
			header("Location: ......");
		}
		if($userType=="D"){
			header("Location: .......");
		}
	}
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<form name="frmUser" method="post" action="">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="userName" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
</form>
<center>
	<div id="bDiv">
		<lable id="lbl">Have not an account?</lable><br><br>
		<button class="btn">I'm a tourist</button>
		<button class="btn" style="margin-left:20px;margin-right:20px;">I'm a guide</button>
		<button class="btn">I'm a driver</button>
	</div>
</center>
</body></html>