<!DOCTYPE html>
<html class="no-js" lang="">

<?php  require'./commonfldr/head.php';?>

  <body>
  <?php require'./navbarfldr/navbar_loggedin.php';?>

    <div class="container">
      <div class="row">
        <div class="col-lg text-center">
          <div
            class="row"
            style="background:transparent url('../public/profilebackground.jpg') no-repeat center center /cover; "
          >
            <div class="col">
              <form>
                <img
                  width="150"
                  height="150"
                  src="../public/kenya.jpg"
                  class="img-fluid img-thumbnail rounded-circle"
                  alt="Picture of User"
                  style="z-index:0"
                />
 

                <div class="form-group">
                  <input
                    type="text"
                    readonly
                    class="form-control"
                    id="website"
                    placeholder="Your Website"
                  />
                </div>
              </form>
            </div>
            <div class="col">
              <form>
                <div class="form-group">
                  <input
                    type="text"
                    readonly
                    class="form-control"
                    id="displayname"
                    placeholder="Your Full Name"
                  />
                </div>

                <div class="form-group">
                  <input
                    type="text"
                    readonly
                    class="form-control read-only form-control-plaintext "
                    id="handle"
                    placeholder="Your Username/Handle"
                  />
                </div>

                <div class="form-group">
                  <input
                    type="text"
                    readonly
                    class="form-control"
                    id="job"
                    placeholder="Your Job"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    readonly
                    class="form-control"
                    id="bio"
                    placeholder="Your Bio"
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Hobbies</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Running</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Podcasting</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Weighlifting</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Social Media</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Youtube</th>
                  <td>www.demo.com</td>
                </tr>
                <tr>
                  <th scope="row">Twitter</th>
                  <td>www.demo.com</td>
                </tr>
                <tr>
                  <th scope="row">Facebook</th>
                  <td>www.demo.com</td>
                </tr>
                <tr>
                  <th scope="row">Instagram</th>
                  <td>www.demo.com</td>
                </tr>
                <tr>
                  <th scope="row">Linkedin</th>
                  <td>www.demo.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php require'./footerfldr/footer.php';?>
    <?php require'./commonfldr/script.php';?>
  </body>
</html>
