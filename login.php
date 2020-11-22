<?php
   $connect = mysqli_connect("localhost", "root","", "signup");
?>
<?php 
 session_start();  
 if(isset($_SESSION["Email"]))  
 {  
      header("location:products2.php");  
 }   
 	if(empty($_POST["Email"]) || empty($_POST["Password"]))  
	{  
		//echo '<script>alert("Both Fields are required")</script>';  
	}  
	else  
	{  
		$Email1 = mysqli_real_escape_string($connect, $_POST["Email"]);  
		$Password1 = mysqli_real_escape_string($connect, $_POST["Password"]);  
		$query = "SELECT * FROM signup WHERE Email = '$Email1' and Password = '$Password1'";  
		$result = mysqli_query($connect, $query);  
		if(mysqli_num_rows($result) > 0)  
		{  
			while($row = mysqli_fetch_array($result))  
			{  
					if($Password1 == $row["Password"])  
					{
						if($Email1 == $row["Email"])  
						{
							//return true;  
							$_SESSION["Email"] = $Email1;  
							header("location:products2.php");  
						}
						else{
							//return false;
							echo '<script>alert("Wrong User Details 5")</script>';  
						}
					}  
					else  
					{  
						//return false;  
						echo '<script>alert("Wrong User Details")</script>';  
					}  
			}  
		}  
		else  
		{  
			echo '<script>alert("Wrong User Details")</script>';  
		}  
	}    
 ?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login |The Covid-Essentials Store</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        
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
                    <a class="navbar-brand" href="#"  style="color:powderblue;"><b>The Covid-Essentials Store</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"style="color:powderblue;">
                       
                        <li><a href="About us.html"><span class="glyphicon glyphicon-user" style="color:powderblue;"></span> About Us </a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>   
		</br>
		</br>
		</br>
		</br>
        <div class="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to proceed</i><p>
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="Email" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="Password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
                <div class="container">
                    <center>
                     <p>Copyright © The Covid-Essentials Store. All Rights
                    Reserved | Contact Us: +91 9820300706. </p>
                    </center>	
                </div>    
        </footer>
    </body>
</html>
