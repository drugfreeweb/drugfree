<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['cam']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
	
		
			$cat=$_POST['cam'];
			echo $cat;
			$query="insert into gallery_month(month) values('$cat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
			
			mysql_close($link);
			header("location:Gellay.php");
		}
	}
	else
	{
		header("location:Gellay.php");
	}
?>
	
	