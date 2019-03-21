<?php 
include('header.php');
?>
<html>
<body>
<div class="container">
	<form class="form-horizontal" method="POST">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
				<input type="text" name="email" id="inputEmail" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" name="submit" class="btn">Submit</button>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<?php
				if (isset($_POST['submit'])){
 
				$email=$_POST['email'];
				$pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
				//Input Validations
				if (!preg_match($pattern,$email)){	
				?>
				<div class="alert alert-danger span2">
					<?php 	echo 'Invalid Email Address';	 ?>
				</div>
				<?php	
				}else{
				?>
				<div class="alert alert-success span3">
					<?php 	echo 'This is a Valid Email Address';	 ?>
				</div>
				<?php
				}
				}
				?>
			</div>
		</div>
	</form>
</div>
</body>
</html>