<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
  </head>

  <body>
  <?php require'./navbar_loggedin.php';?>

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
                  src="../public/danny.jpg"
                  class="img-fluid img-thumbnail rounded-circle"
                  alt="Picture of User"
                  style="z-index:0"
                />
                <button type="button" class="btn btn-primary" style="z-index:0">
                  Update Info
                </button>

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

    <footer class="page-footer font-small blue">
      <!-- Copyright -->
      <a class="navbar-brand" href="#">
        <img
          src="../public/skull.svg"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt=""
        />
        MernSkeleton
      </a>
      <a class="footer-copyright text-center py-3">
        © 2018 Copyright:
      </a>

      <a>
        Terms
      </a>
      <a>
        Privacy
      </a>

      <!-- Copyright -->
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="js/vendor/jquery-3.3.1.min.js"><\/script>'
        );
    </script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function() {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("send", "pageview");
    </script>
    <script
      src="https://www.google-analytics.com/analytics.js"
      async
      defer
    ></script>
  </body>
</html>
