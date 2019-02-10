<!DOCTYPE html>
<html class="no-js" lang="">
<?php  require'./commonfldr/head.php';?>


  <body>

  <?php require'./navbarfldr/navbar_loggedin.php';?>

    <div class="container">
      <form>
        <div class="row" style="height: 80vh;">
          <div class="col-lg text-center">
            
          <?php require'./commonfldr/editprofileheader.php';?>

            <div class="row">
              <div class="col-sm">
                <ul class="nav flex-column nav-pills ">
                  <li class="nav-item">
                    <a class="nav-link " href="./editprofilebasic.php">Edit Basic Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./editprofilesocial.php">Edit Social Media</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./editprofilebio.php">Edit Hobbies and Bio</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg">
                <form id="editsocial" action="">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">www</div>
                    </div>
                    <input
                      type="url"
                      class="form-control"
                      id="website"
                      placeholder="Your Website"
                    />
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fab fa-youtube"></i>
                      </div>
                    </div>

                    <input
                      type="url"
                      class="form-control"
                      id="youtube"
                      placeholder="Youtube"
                    />
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fab fa-twitter"></i>
                      </div>
                    </div>
                    <input
                      type="url"
                      class="form-control"
                      id="twitter"
                      placeholder="Twitter"
                    />
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fab fa-facebook"></i>
                      </div>
                    </div>
                    <input
                      type="url"
                      class="form-control"
                      id="facebook"
                      placeholder="Facebook"
                    />
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fab fa-linkedin"></i>
                      </div>
                    </div>
                    <input
                      type="url"
                      class="form-control"
                      id="linkedin"
                      placeholder="LinkedIn"
                    />
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                    <input
                      type="url"
                      class="form-control"
                      id="instagram"
                      placeholder="Instagram"
                    />
                  </div>
                  <div class=" text-center">
                    <button type="submit" class="btn btn-primary">
                      Save Changes
                    </button>
                    <button type="button" class="btn btn-primary">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>


    <?php require'./footerfldr/footer.php';?>
    <?php require'./commonfldr/script.php';?>



  </body>
</html>
