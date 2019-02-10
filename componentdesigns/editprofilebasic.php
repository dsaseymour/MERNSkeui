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
                    <a class="nav-link active" href="./editprofilebasic.php">Edit Basic Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./editprofilesocial.php">Edit Social Media</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./editprofilebio.php">Edit Hobbies and Bio</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg">
                <form id="editbasic" action="">
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control"
                      id="age"
                      placeholder="Age"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="date"
                      class="form-control"
                      id="dateofbirth"
                      placeholder="Date of Birth"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="address"
                      placeholder="Address"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="gender"
                      placeholder="Gender"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="job"
                      placeholder="Job"
                    />
                  </div>
                  <div class="text-center">
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
