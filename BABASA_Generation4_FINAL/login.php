<!--
    Owner: Edward Jose Babasa BSIT-2
    
    Honor Code:
    This is my own work and I have not received any unauthorized help in completing this. I have not copied from my classmate, friend,
    nor any unauthorized resource. I am well aware of the policies stipulated in the handbook regarding academic dishonesty. If proven
    guilty, I won't be credited any points for this endeavor.

-->
<?php
    require_once "dbconnect.php";
    // require_once "config.php";

    // $loginURL = $gClient->createAuthUrl();

    if(isset($_POST['submit'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            $error = "Username or Password is Invalid";
        }
        else {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password= '$password'");
            $rows = mysqli_num_rows($query);

            if($rows == 1){
                $error = "Username or Password is Invalid";
            }else{
                header("location:home.php");
            }
            mysqli_close($connect);
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <style>
        body{
            margin: 0 auto;
            background-image: url("ps4.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        h2{
            color:white;
            padding-top: 50px;
        }


        .container{
            width: 500px;
            height: 450px;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(44, 62, 80,0.7);
            margin-top: 160px;
        }

        .container img{
            width: 150px;
            height: 150px;
            margin-top: -60px;
        }

        input[type="text"],input[type="password"]{
            margin-top: 30px;
            height: 45px;
            width: 300px;
            font-size: 18px;
            margin-bottom: 20px;
            background-color: #fff;
            padding-left: 40px;
        }

        .btn-login{
            padding: 15px 25px;
            border: none;
            background-color: #27ae60;
            color: #fff;
        }

        .google{
            padding-top: 25px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Generation4</a>
        </nav>


	<div class="container">
	<h2 class="login">Login</h2>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
            <input type="submit" name="submit" value="Log In" class="btn btn-primary"/>
            <a href="http://localhost/signup.php"><input value="Sign Up" class="btn btn-primary"/></a>
            <div class="google">
                <input type="button" value="Log In with Google" class="btn btn-danger">
            </div>

		</form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>