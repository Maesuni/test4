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
  <!-- Form starts here -->
        <form method="POST" action="your-server-side-script.php">
            
            <!-- Name Field -->
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>

            <!-- Middle Name Field -->
            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label>
                <input type="text" name="middlename" id="middlename" class="form-control" required>
            </div>

            <!-- Last Name Field -->
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>

            <!-- Age Field -->
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>

            <!-- Address Field -->
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <!-- Course and Section Field -->
            <div class="mb-3">
                <label for="courseandsection" class="form-label">Course and Section:</label>
                <input type="text" name="courseandsection" id="courseandsection" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

</div>
</body>
</html>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
