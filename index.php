<!DOCTYPE html>
<html>
<head>
	<title>MAP</title>
	
	
	
	<style type="text/css">
			.container{
				
				height: 450px;
			}

		#map {
			
			width : 100%;
			height :500px;
			border: 1px solid red;
			
		}


/* Add a black background color to the top navigation */
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




	</style>
</head>

<body>
		<div>
		
		</div>



		<div class="topnav">

  <a class="active" href="#home">Home</a>
  <a href="QR/QR.php">Scan QR code</a>
  <a href="profile.php">Profile</a>
  <a href="http://localhost/Xcode/recept.php">Payment</a>
  <a href="trip_details.php">Trip Details</a>
  <a href="http://localhost/xcode/Contact/">Feedback</a>
  <a href="#logout">Logout</a>
		</div>


		




		<div class="container">
			
			<div id="map"></div>
		</div>


<script type="text/javascript">
		function loadMap() {
	
	var Dhaka = {lat: 23.8103, lng: 90.4125};
	var map = new google.maps.Map(document.getElementById('map'), {
          center: Dhaka,
          zoom: 10
        });

	 var marker = new google.maps.Marker({
          map: map,
          position: Dhaka,
          title: 'Hello World!'
        });

	
}
</script>




<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: white;
  text-align: center;
}
</style>

<div class="footer">
  <p><h2>Asta la vista Baby #Harly_Quinn</h2></p>
</div>


		
</body>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=loadMap"
        async defer></script>

</html>