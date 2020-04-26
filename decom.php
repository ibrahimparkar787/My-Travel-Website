<?php
$connect = mysqli_connect("localhost","root","","travel height");

$comments_u=$_POST['commentss'];
if ($connect) 
{
	echo "Connection Successful";
	$sqlTData = "INSERT INTO comments(comment) VALUES ('$comments_u')";
	//if (isset($_POST["submit"])) 
	
			$myquery = mysqli_query($connect,$sqlTData);

			if(!$myquery)
			{
				echo " could not insert into table";
			}
			else
				echo "<br/><br/><span>Data Inserted successfully...!!</span>";
	

}
else
		{
			echo "Connection Error".die(mysqli_error());
		}
		mysqli_close($connect);
?>