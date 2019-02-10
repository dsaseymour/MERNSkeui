<!DOCTYPE html>
<html class="no-js" lang="">

<?php  require'./commonfldr/head.php';?>


  <body>
  <?php require'./navbarfldr/navbar_loggedout.php';?>


  <div class="container">
      <form>
        <div class="row">
          <div class="col-md text-center">
            <label>Login to MERN Skeleton</label>

            <div class="form-group">
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Email"
              />
            </div>
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password"
              />
            </div>

            <button type="submit" class="btn btn-primary">
              Login
            </button>
            <button type="submit" class="btn btn-primary">
              Reset Password
            </button>
          </div>
          <div class="col-md text-center">
            <div>
              <button type="button" class="btn btn-primary">
                Login with Google
              </button>
            </div>
            <div>
              <button type="button" class="btn btn-primary">
                Login with Facebook
              </button>
            </div>
          </div>
        </div>
      </form>
      <div class="text-center">
        <button type="button" class="btn btn-primary">
          Create an Account
        </button>
      </div>
    </div>


    <?php require'./footerfldr/footer.php';?>
    <?php require'./commonfldr/script.php';?>

  </body>
</html>
