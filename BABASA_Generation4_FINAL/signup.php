<?php
    require_once ('dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
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
            margin-top: -40px;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Generation4</a>
        </nav>

    <div>
        <?php
            if(isset($_POST['submit'])){
               $name = $_POST['name'];
               $username = $_POST['username'];
               $password = $_POST['password'];

            //    $query = mysqli_query($connect, "INSERT INTO users('name','username','password') VALUES($name, $username, $password)");
            //    $rows = mysqli_num_rows($query);
            }
        ?>
    </div>


	<div class="container">
    <h2 class="login">Sign Up</h2>
            <form method="POST" action="signup.php">
                <div class="form-input">
                    <input type="text" name="name" required placeholder="Enter Name"/>	
                </div>
                <div class="form-input">
                    <input type="text" name="username" required placeholder="Enter Username"/>	
                </div>
                <div class="form-input">
                    <input type="password" name="password" required placeholder=" Enter Password"/>
                </div>
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary"/>
                <a href="http://localhost/login.php"><input name="submit" value="Back" class="btn btn-primary"/></a>
                    
            </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>