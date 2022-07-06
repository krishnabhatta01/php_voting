<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
  <link rel="icon" type="image/x-icon" href="partials/assets/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container ">
    <!-- Navbar section -->
    <nav class="navbar bg-light w-100% m-5 p-3 rounded-pill ">
  <div class="container-fluid ">
    <span class="navbar-brand mb-0 h1 "> VOTING SYSTEM</span>
  </div>
    </nav>



    <!-- Form section  -->
    <form class="row g-3" action="./action/login.php" method="POST" >
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" name="username" class="form-control" id="inputEmail4">
  </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Phone number</label>
      <input type="text" name="mobile" class="form-control" id="inputAddress" >
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
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
    <p class="text-center">Dont have an account? <a href="./partials/registration.php" class="text-black"> Register here...</a> </p>
</form>
</div>
    
</body>
</html>