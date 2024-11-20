<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

</body>
</html>
<?php 

$conn=mysqli_connect('localhost','root','','test');
if($conn){
	

}
else{
	echo"<script>
	alert('Something goes wrong');
	</script>";
}
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$course=$_POST['course'];
	$mobile=$_POST['mobileno'];
	$password=$_POST['password'];
	$sql="INSERT INTO `students`(`id`, `name`, `email`, `course`, `mobileNo`, `password`) VALUES (null,'$name','$email','$course','$mobile',sha1('$password'))";
	$run=mysqli_query($conn,$sql);
	if($run){
		echo" <script>
		Swal.fire({
  title: 'Congratulation',
  text: 'You Successfully registerd on StyleShavy',
  icon: 'success'
});
		</script>";
		header('loaction:signUppage.html');


	}
	else{
		echo"
        Swal.fire({
  title: 'Wrong',
  text: 'Something went wrong',
  icon: 'error'
});
		";
	}


} 


?>