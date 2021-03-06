<?php include('./header.php')?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
            <form action="./includes/login.inc.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" name="uid" class="form-control" id="floatingInput" placeholder="Your Username/Email...">
                <label for="floatingInput">Email/Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="">
                <label for="floatingPassword">Password</label>
                <p>Dont have an account?  <a href="signup.php">Register here</a>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Login</button>
              </div>
            </form><br><br>
            <?php 
            if(isset($_GET["error"])){
                if($_GET["error"]=="emptyinput"){
                    echo "<p>Fill all blanks!</p>";
                }
                else if($_GET["error"]=="wronglogin"){
                    echo "<p>Incorrect Login!</p>";
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include("./footer.php")?>