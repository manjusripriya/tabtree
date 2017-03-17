 <?php
            include('config.php');
            if (isset($_POST['create'])) {
               $subject = $_POST['name'];
               $description = $_POST['content'];
              echo $sql= "insert into glpi_tickets(name,content,date) values ('$subject','$description',NOW())";
               $result = mysqli_query($conn,$sql);
               if ($result) 
               {
                  echo "Inserted Succeessfully";
               }
            }

             ?>
              <div class="container-fluid">
                <h3 align="center">Create Ticket</h3>
                <div class="row">
                    <div class="col-md-2"></div>
                  <div class="col-md-8">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                     <select name="name" class="form-control">
                          <option>Select Category</option>
                          <?php
                          include('config.php');
                          $sql = mysqli_query($conn, "SELECT name From glpi_itilcategories");
                          $row = mysqli_num_rows($sql);
                          while ($row = mysqli_fetch_array($sql)){
                          echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                          }
                          ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                     <select name="completename" class="form-control">
                          <option>Select Type</option>
                          <?php
                          include('config.php');
                          $sql = mysqli_query($conn, "SELECT type From glpi_tickets");
                          $row = mysqli_num_rows($sql);
                          while ($row = mysqli_fetch_array($sql)){
                          echo "<option value='". $row['type'] ."'>" .$row['type'] ."</option>" ;
                          }
                          ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="name">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Description</label><br>
                    <textarea rows="4" cols="100" name="content"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Attach File</label>
                    <input type="file" id="exampleInputFile" name="filename" >
                    
                  </div>
                  <br>
                  <p align="center"><button type="submit" class="btn btn-success" name="create">Create</button></p>
                </form>
                </div>
            </div>
            </div>
            <!-- /.container-fluid -->
