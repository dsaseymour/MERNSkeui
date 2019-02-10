<!DOCTYPE html>
<html class="no-js" lang="">
<?php  require'./commonfldr/head.php';?>


  <body>
  <?php require'./navbarfldr/navbar_loggedin.php';?>

  
    <div class="container">
      <form>
        <div class="row" style="height: 80vh;">
          <div class="col-sm text-center">

          <?php require'./commonfldr/usersettingsheader.php';?>

    <div class="list-group">
        <a  href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ">
        Account
          <span ><i class="fas fa-angle-right"></i></span>
      </a >
      <a href="#"  class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active">
        Password
          <span ><i class="fas fa-angle-right"></i></span>
      </a >
    </div>


          </div>
          <div class="col-lg text-center">
          <div class="card">


  <div class="card-body">
    <h5 class="card-title">Password</h5>
    <p>Change your password or recover your current one</p>
    <table class="table table-sm">

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



  </div>



          </div>
          <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Save Changes
                    </button>
                    <button type="button" class="btn btn-primary">
                      Cancel
                    </button>
                  </div>
        </div>



       </form>
    </div>

    <?php require'./footerfldr/footer.php';?>
    <?php require'./commonfldr/script.php';?>



  </body>
</html>
