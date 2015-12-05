<html>
<head>
<title>Show Data</title>
</head>
<body>
<?php
$memberID = (is_numeric($_POST['username']) ? (int)$_POST['username'] : 0);
$mypassword=$_POST['password'];

echo "<br> $memberID</br>";
echo "<br> $mypassword</br>";
if(isset($_POST['submitlogin']))
{

	@$con=mysql_connect('localhost','root','passwordvua');
	if($con)
	{
		echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}
	mysql_select_db('Youth\'sVoice',$con);
	
	$sql="SELECT Member_id FROM Members WHERE '$memberID'= Member_ID AND '$mypassword'= Password";
	$result = mysql_query($sql,$con);
	
	if($result)
	{
			echo "successful";
	}
	else{
		echo "u're fucked again";
	}

	
	mysql_close($con);
}
?>
</body>
</html>
