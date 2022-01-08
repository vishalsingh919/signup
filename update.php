<?php

include 'conn.php';
$id = $_GET['id'];

$query = "SELECT * FROM crudtable WHERE id=$id";
$result = mysqli_query($con, $query) or die(mysql_error());
$res = mysqli_fetch_array($result);


if(isset($_POST['done'])){

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
	$sql = "UPDATE crudtable 
	SET id=$id, username='$username', password='$password'
	WHERE id = $id";  
    
    $query = mysqli_query($con,$sql); 
    header("location:display.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="col-lg-6 m-auto">

		<form method="post">

			<br><br> <div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Update Operation </h1>
              </div><br>

              <label> Username: </label>
              <input type="text" name="username" value="<?php echo $res['username']?>" required class="form-control"> <br>

              <label> Password: </label>
              <input type="password" name="password" value="<?php echo $res['password']?>" required class="form-control"> <br>

              <button class="btn btn-success" type="submit" name="done"> Submit </button> <br>

          </div>
       </form>
    </div>
</body>
</html>