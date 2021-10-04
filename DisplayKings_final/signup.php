<?php include('./header.php')?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">New User? Sign Up</h5>
            <form action="./includes/signup.inc.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Vase ime...">
                <label for="floatingInput">First Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="lastName" class="form-control" id="floatingPassword" placeholder="Vase prezime...">
                <label for="floatingPassword">Last Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Vas Email...">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Your ...">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password...">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pwd1" class="form-control" id="floatingPassword" placeholder="Confirm Password...">
                <label for="floatingPassword">Confirm Password</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Register</button>
              </div>
            </form><br><br>
            <?php 
            if(isset($_GET["error"])){
                if($_GET["error"]=="emptyinput"){
                    echo "<p>Fill all the blanks!</p>";
                }
                else if($_GET["error"]=="invalidusername"){
                    echo "<p>Invalid username!</p>";
                }
                else if($_GET["error"]=="invalidemail"){
                    echo "<p>Invalid email!</p>";
                }
                else if($_GET["error"]=="passworddontmatch"){
                    echo "<p>Password don't match!</p>";
                }
                else if($_GET["error"]=="thisuserexist"){
                    echo "<p>This username is already in use!</p>";
                }
                else if($_GET["error"]=="stmtfailed"){
                    echo "<p>Something went wrong, try again!</p>";
                }
                else if($_GET["error"]=="none"){
                    echo "<p>You are now registered to you!</p>";
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