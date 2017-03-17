<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4">
  <h2 align="center">Sign Up</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="usr">Userame:</label>
      <input type="text" class="form-control" id="usr" name="name">
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
      <label for="email">Mobile Number:</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
     <!--  <div class="form-group">
      <label for="client name">Client Name:</label>
         <select name="completename" class="form-control">
          <option>Select Client Name</option>
          <?php
          include('config.php');
          $sql = mysqli_query($conn, "SELECT name From glpi_entities");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)){
          echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
          }
          ?>
    </select>
    </div> -->
    <p align="center"><input type="submit" value="Submit" class="btn btn-primary" name="insert"></p>
  </form>
  </div>
  </div>
</div>

</body>
</html>
