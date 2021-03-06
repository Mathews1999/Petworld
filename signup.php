<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petworld</title>
</head>
<body style="background-color: rgb(200, 243, 243);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Pictures\logo.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
                Petworld
              </a>   
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pets.php">Pets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
              </li>
              </ul>
              <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                          <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                        </ul>
                </ul>
            </form>
          </div>
        </div>
      </nav>
  <div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <table class="table  table-borderless">
                <tr>
                    <td><h1><u>SIGN UP</u></h1></td>
                </tr>
               <tr>
                   <td> Name</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                   <td>Address</td>
                   <td><textarea id="w3review" name="w3review" rows="4" cols="50"></textarea></td>
               </tr>
               <tr>
                   <td>Place</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                   <td>PhoneNo</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                   <td>Email</td>
                   <td><input type="text" class="form-control"></td>
               </tr>
               <tr>
                <td>Username</td>
                <td><input type="text" class="form-control"></td>
            </tr>
               <tr>
                   <td>Password</td>
                   <td><input type="password" class="form-control"></td>
               </tr>
               <tr>
                   <td>Confirm Password</td>
                   <td><input type="password" class="form-control"></td>
               </tr>
               <tr></tr>
               <tr>
                   <td></td>
                   <td><button class="btn btn-success">Register</button></td>
               </tr>
            </table>
        </div>
       
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>