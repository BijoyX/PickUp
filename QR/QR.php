<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QRcode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <style>

       .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}



        html, body {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("images/d2.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


       



    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
                <div class="panel-heading">
                    <h1>Decode QR codes</h1>
                </div>
                <hr>
                <form action="decode.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="qrimage" accept="image/*" id="qrimage" class="form-control"><br>
                    <input type="submit" class="btn btn-md btn-block btn-danger" value="Decode the Code">
                </form>
            </div>
        </div>
    </div>
    
    <div class="topnav">

  <a href="http://localhost/Xcode">Home</a>
  <a class="active" href="#QRcode">Scan QR code</a>
  <a href="http://localhost/Xcode/profile.php">Profile</a>
  <a href="http://localhost/Xcode/recept.php">Payment</a>
  <a href="trip_details.php">Trip Details</a>
  <a href="feedback.php">Feedback</a>
  <a href="http://localhost/home.php">Back to Home</a>
        </div>


</body>
</html>