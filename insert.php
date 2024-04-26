<?php include('includes/header.php'); ?>
<div class="container-fluid py-4">
<div class="row min-vh-80 h-100">
<div class="col-12">

  <div class = "card">
    <div class = "card-header">
      <h4>
        Insert data into databse in PHP 
        <a href = "insert.php" class = "btn btn-primary float-end"> Insert Data</a>
      </h4>
    </div>
    <div class= "card-body">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name = "name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

         
    </div>
  </div>
</div>
</div>
</div>


<?php include('includes/footer.php'); ?>


