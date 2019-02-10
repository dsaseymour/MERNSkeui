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
                    <a class="nav-link" href="./editprofilesocial.php">Edit Social Media</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./editprofilebio.php">Edit Hobbies and Bio</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg">
                <form id="editbio" action="">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Bio: </label>
                    <textarea
                      name="bio"
                      form="editbio"
                      class="form-control"
                      id="bio"
                      placeholder="It was a dark and stormy night ...."
                      rows="3"
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Hobby 1</label>
                    <input
                      type="text"
                      class="form-control"
                      id="formGroupExampleInput"
                      placeholder="Example input"
                    />
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Hobby 2</label>
                    <input
                      type="text"
                      class="form-control"
                      id="formGroupExampleInput"
                      placeholder="Example input"
                    />
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Hobby 3</label>
                    <input
                      type="text"
                      class="form-control"
                      id="formGroupExampleInput"
                      placeholder="Example input"
                    />
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Hobby 4</label>
                    <input
                      type="text"
                      class="form-control"
                      id="formGroupExampleInput"
                      placeholder="Example input"
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
