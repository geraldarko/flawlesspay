<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register FlawlessPay</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h3>Welcome To FlawlessPay</h3>
              </div>
              <p class="login-card-description">Sign Up</p>

              <form action= "registerprocess.php" method="POST" enctype="multipart/form-data">

                   <!--make username textbox-->
                  <div class="form-group">
                    <label for="username" class="sr-only">Name</label>
                    <input type="text" name="username" id="userName" class="form-control" placeholder="Name">
                  </div>

                  <!--make email textbox-->
                  <div class="form-group">
                    <label for="useremail" class="sr-only">Email</label>
                    <input type="email" name="useremail" id="userEmail" class="form-control" placeholder="Email address">
                  </div>

                  <!-- make password textbox -->
                  <div class="form-group mb-4">
                    <label for="registerpassword" class="sr-only">Password</label>
                    <input type="password" name="registerpassword" id="registerpsswd" class="form-control" placeholder="Enter Password">
                  </div>

                  <!-- make confimrpassword textbox -->
                  <!-- <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Confirm Password">
                  </div> -->

                  <!-- make contact textbox -->
                  <div class="form-group">
                    <label for="user_pnum" class="sr-only">Contact</label>
                    <input type="text" name="user_pnum" id="user_PNumber" class="form-control" placeholder="Phone Number">
                  </div>

                  <!-- make gender dropdown -->
                  <div class="form-group">
                    <label for="userGender">Select Gender:</label>
                    <select name="gender" id="userGender">
                        <option selected='selected'>--</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                  </div>

                  <!-- make user image -->
                  <div class="form-group">
                    <label for="user_img" class="sr-only">User Image</label>
                    <input type="file" name="userImg" id="user_img" class="form-control">
                  </div>

                  <!-- submit button -->
                  <input name="registersubmit" id="signup" class="btn btn-block login-btn mb-4" type="submit" value="Signup">

                </form>

                <!-- to login button -->
                <p class="login-card-footer-text">You have an account? <a href="login.php" class="text-reset">Sign In here</a></p>

                <nav class="login-card-footer-nav">

                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>



