<!DOCTYPE html>
<html class="no-js" lang="">
<?php  require'./commonfldr/head.php';?>

  <body>
  <?php require'./navbarfldr/navbar_loggedout.php';?>


  <div class="container" style="margin-top:10vh">
      <div class="row" style="height: 70vh">
        <div class="col-md text-center">
          <form>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="displayName"
                placeholder="Full Name"
              />
            </div>
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
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                id="confirmpassword"
                placeholder="Confirm Password"
              />
            </div>
            <label>
              By signing up, you agree to the Terms of Service and Privacy
              Policy, including Cookie Use. Others will be able to find you by
              your selected username· Privacy Options
            </label>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="consent" />
              <label class="form-check-label" for="consent"
                >I agree to the Terms and Conditions</label
              >
            </div>
            <button type="submit" class="btn btn-primary">
              Sign Up
            </button>
          </form>
        </div>
        <div class="col-md text-center">
          <div style="margin-bottom:1vh">
            <button
              type="button btn-danger"
              style="padding:1em"
              class="btn btn-danger"
            >
              <i class="fab fa-google"></i>

              Signup with Google
            </button>
          </div>
          <div>
            <button type="button" style="padding:1em" class="btn btn-primary">
              <i class="fab fa-facebook"></i>
              Signup with Facebook
            </button>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="button" class="btn btn-primary">
          Already Have an Account?
        </button>
      </div>
    </div>

    <?php require'./footerfldr/footer.php';?>
    <?php require'./commonfldr/script.php';?>

  </body>
</html>
