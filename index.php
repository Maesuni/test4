<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My first Ubuntu Server PHP Deployment</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<body>
<p>Ubuntu Server PHP Deployment</p>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<div>
	<label>First name:</label>
	<input type="text" name="firstname" class="form-control">
</div>

<div>
	<label>Middle name:</label>
	<input type="text" name="middlename" class="form-control">
</div>

<div>
	<label>last name:</label>
	<input type="text" name="lastname" class="form-control">
</div>

<div>
	<label>Age:</label>
	<input type="text" name="age" class="form-control">
</div>

<div>
	<label>Address:</label>
	<input type="text" name="address" class="form-control">
</div>

<div>
	<label>Course and Section:</label>
	<input type="text" name="courseandsection" class="form-control">
</div>


  <!-- submit code -->
<div>
	  <button type="submit" class="btn btn-success">Submit</button>
</div>

 </form>
 </body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>