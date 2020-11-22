<?php
if(isset($_POST["submitbtn"]))
{

	$servername = "localhost";
	$username = "root";
	
	$dbname = "signup";


	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$address=$_POST['address'];

$conn = mysqli_connect($servername, $username, "", $dbname);

if (mysqli_connect_errno($conn))
{
	// die("connection failed; ". $conn-> connect_error);
	echo "Connection failed";
}
$sql = "INSERT INTO signup(Name,Email,password,Contact,City,Address) VALUES ('$name','$email','$password','$phone','$city','$address')";


if(mysqli_query($conn,$sql))
{
	echo "New Record Created Successfully";
    header("Location:login.php");
}
else
{
	echo "Error";
}
}
?>
<!DOCTYPE html>
    <head>
        <title>Sign UP | The Covid-Essentials Store</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet" type="text/css"/>

    </head>
        <body style="background-color:powderblue;">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"  style="color:powderblue;">The Covid-Essentials Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"style="color:powderblue;">
                        <!--<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>-->
                        <li><a href="About us.html"><span class="glyphicon glyphicon-user" style="color:powderblue;"></span> About Us </a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:powderblue;"></span> Login </a></li>
                    </ul>
                </div>
            </div>
        </nav>   
		</br>
		</br>
		</br>
		</br>
        <div class="container signup">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 form">
                    <h1> Sign up </h1>
                    <form method="POST" action="">
                        <div class="form-group">
                                <input class="form-control" placeholder="Name" type="text" name="name" required="true">
            
                                <br>

                                <input type="email" class="form-control" placeholder="Email" name="email">
            
                                <br>

                                <input class="form-control" placeholder="Password" type="password" name="password">
            
                                <br>
            
                                <input class="form-control" placeholder="Contact" type="tel" name="phone" required="true">
            
                                <br>

                                <input class="form-control" placeholder="City" type="text" name="city" required="true">

                                <br>
                                <input class="form-control" placeholder="Address" type="text" name="address" required="true">

                                <br>
            
                    <button class="btn btn-primary" name = "submitbtn" type="submit" >Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
                <div class="container">
                    <center>
                     <p>Copyright © The Covid-Essentials Store. All Rights
                    Reserved | Contact Us: +91 9702087493. </p>
                    </center>	
                </div>    
        </footer>
    </body>
</html>