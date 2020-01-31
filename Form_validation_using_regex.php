<?php 
     if (array_key_exists("submit", $_POST)) {
         
        $error="<p>There were error(s) in your form:</p>";
     	$email=$_POST['email'];
     	$pass=$_POST['password'];
     	$present_address=$_POST['addressOne'];
     	$permanent_address=$_POST['addressTwo'];
     	$city=$_POST['city'];
     	$zip=$_POST['zip'];
        
        $email_pattren='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (!preg_match($email_pattren, $email)) {

        	$error.="<p>Email InValid*</p>";
        	
        }

        $pass_pattren='/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/';
        if (!preg_match($pass_pattren, $pass)) {

        	$error.="<p>password InValid*</p>";
        	
        }

        $pass_pattren='/^[a-z0-9]+$/i';
        if (!preg_match($pass_pattren, $pass)) {

        	$error.="<p>Addrees InValid*</p>";
        	
        }

        $zip_pattren='/^\d{5}$/';
        if (!preg_match($zip_pattren, $zip)) {

        	$error.="<p>ZIP InValid*</p>";
        	
        }
      }

 ?>



 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
  </head>
  <body>
    

    <div class="container bg-inverse bg-dark text-white pt-3 pb-3 mt-3">
    	<div class="alert alert-warning" role="alert">
    		<?php echo $error; ?>
    	</div>
    	<form method="POST">
    		<div class="row">
    			<div class="form-group col-md-6">
    				<label for="email">Email</label>
    				<input type="text" class="form-control" name="email" placeholder="eg.mateen@gmail.com">
    			</div>
    			<div class="form-group col-md-6">
    				<label for="email">Password</label>
    				<input type="text" class="form-control" name="password" placeholder="password">
    			</div>
    		</div> 
    		<div class="form-group">
    			<label for="address_1">Present Address</label>
    			<input type="text" class="form-control" name="addressOne">
    		</div> 
    		<div class="form-group">
    			<label for="address_2">Permanent Address</label>
    			<input type="text" class="form-control" name="addressTwo">
    		</div>
    		<div class="form-row">
    			<div class="form-group col-md-6">
    				<label for="city">City</label>
    				<input type="text" class="form-control" name="city">
    			</div>
    			<div class="form-group col-md-4">
    				<label for="state">Pakistan</label>
    				<select name="pakistan" class="form-control" id="">
    					<option value="kpk" selected>KPK</option>
    					<option value="sindh">Sindh</option>
    					<option value="balochistan">balochistan</option>
    					<option value="punjab">Punjab</option>
    					<option value="gilgit">Gilgit Baltistan</option>
    				</select>
    			</div>
    			<div class="form-group col-md-2">
    				<label for="zip">ZIP</label>
    				<input type="text" name="zip" class="form-control">
    			</div>
    		</div>
    		<div class="form-group">
    			<div class="form-check">
    				<input type="checkbox" name="stayloggedIn" class="form-check-input" value="1">
    				<label for="checkbox">Check me out</label>
    			</div>                
    		</div>
    		<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
    	</form>     
     </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
