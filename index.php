<html>
<head>
	<title>Job Portal</title>

</head>
<form action="" method="POST">
	Skill 1<input type="" name="skill1"><br>
	Skill 2<input type="" name="skill2"><br>
	Skill 3<input type="" name="skill3"><br><br>
	<input type="submit" name="submit" value="Job Search">
	<h5 style="color: red;">*Two skills are mandatory to search</h5>
<br>
</form>
<?php
include('conn.php');
error_reporting(0);
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];
if(isset($_POST['submit']))
{
	?>
		<h3 style="text-decoration: underline;">Job match acording to the skills:</h3>
		<?php
	$sql="select * from job_search where skill1='$skill1' or '$skill2' or '$skill3' and skill2='$skill1' or '$skill2' or '$skill3' or skill3='$skill1' or '$skill2' or '$skill3'";
	$query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0)
	{
		
		while($row=mysqli_fetch_array($query))
		{
	
			

			echo $row['job'].'<br>';
		}
	}
	else
	{
		?>
		<p style="color: red;">Job Not found</p>
		<?php
	}
}
  ?>

</html>