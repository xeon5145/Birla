<div class="box-form">
    <div class="left">
        <div class="overlay">
                  <h2 style="text-align: center;">Welcome to hospital!</h2>
                  <div class="">
                    <!-- login / Signup form here -->
                    <form class="" action="" method="post">
                      <h3>Email/Username</h3>
                      <input type="text" name="username" value="" placeholder="Enter Email/Username" required>
                      <h3>Password</h3>
                      <input type="password" name="password" value="" placeholder="Enter password" required>
                      <br>
                      <div class="" style="display: grid; color: #ffffff;">
                        <a href="" style="color: #ffffff;">Signup</a>
                        <a href="" style="color: #ffffff;">Forgot Password</a>
                      </div>
                      <br>
                        <p style="font-weight: bold; text-align: center; color: #ff1409; font-size: 1.3rem;"><?php echo $login_message; ?></p>
                        <p style="font-weight: bold; text-align: center; color: #ff1409; font-size: 1.3rem;"><?php echo @$_SESSION['notice']; ?></p>

                      <input type="submit" name="login" value="Login">
                    </form>
                    <!-- login / Signup form here -->
                  </div>
          </div>
      </div>
  </div>
