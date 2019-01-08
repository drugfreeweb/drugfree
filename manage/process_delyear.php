<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
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
		
			
		
			$delcat=$_POST['del'];
			
			$query="delete from  gallery_year where Year ='$delcat' ";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:Gellay.php");
		}
	}
	else
	{
		header("location:Gellay.php");
	}
?>
	
	