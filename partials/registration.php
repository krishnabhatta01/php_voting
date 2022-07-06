<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system</title>
    <link rel="icon" type="image/x-icon" href="partials/assets/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
<!-- Form section  -->
    <form class="row g-3" method="POST" action="../action/register.php" enctype="multipart/form-data">
  <div class="col-md-6"  >
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" name="username" id="inputEmail4">
  </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Phone number</label>
      <input type="text" class="form-control" name="mobile" id="inputAddress" >
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Confirm Password</label>   
      <input type="password" name="cpassword" class="form-control" id="inputPassword4">
    </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile" name="photo">
</div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Group</label>
    <select id="inputState" class="form-select" name="std">
      <option selected value="voter">Voter</option>
      <option value="group">Group</option>
      
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Log in</button>
  </div>
    <p class="text-center">Already have an account? <a href="../index.php" class="text-black"> Login here...</a> </p>
</form>
    
<!-- end of form -->
</div>
</body>
</html>