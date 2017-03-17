<!DOCTYPE html>
<html lang="en">
<head>
  <title>TabTree :: Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
  $( function() {
    $( "#dob" ).datepicker();
  } );
  </script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4">
  <h2 align="center">SignUp</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
      <label for="email">Conform Password:</label>
      <input type="password" class="form-control" id="password" name="conform_password">
    </div>
    <div class="form-group">
      <label for="email">Date Of Birth:</label>
      <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <p align="center"><input type="submit" value="Signup" class="btn btn-primary" name="signup"></p>
  </form>
  </div>
  </div>
</div>

</body>
</html>
<script type="text/javascript">
</script>
