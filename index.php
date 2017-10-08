<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

    <title>PHP Timeclock</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/dashboard.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">PHP Timeclock</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reports</a>
          </li>
        </ul>

        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><b>Users</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">User Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create New User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">User Search</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><b>Offices</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Office Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create New Office</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><b>Groups</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Group Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create New Group</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><b>In/Out Status</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Status Summary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create Status</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link disabled" href="#"><b>Admin Actions</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add/Edit/Delete Time</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Edit System Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Database Settings</a>
            </li>
          </ul>

        </nav>
        <!-- Main -->
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h1>Admin Dashboard</h1>
             <h3>System Settings</h3>
              <p>Below are the settings that have been chosen within your config.inc.php file.</p>

          <!-- <h4>Heading</h4> -->
          <div class="table-responsive">
            <table class="table table-responsive table-dark">
            <thead>
                <tr>
                  <th>VARIABLE</th>
                  <th>VALUE</th>
                  <th>DESCRIPTION</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>MySQL Settings</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>db_hostname:</td>
                  <td>localhost</td>
                  <td>Hostname for your mysql server. Default='localhost'</td>
                </tr>
                <tr>
                  <td>db_name</td>
                  <td>timeclock</td>
                  <td>Name of your mysql database</td>
                </tr>
                <tr>
                  <td>db_username</td>
                  <td>admin</td>
                  <td>Administrator username. *Administrator has all rights by default*</td>
                </tr>
                <tr>
                  <td>db_password</td>
                  <td>********</td>
                  <td>Administrator password. Default='password'</td>
                </tr>
                <tr>
                  <td>dbversion</td>
                  <td>1.0</td>
                  <td>The version of the current database for the PHP Timeclock application</td>
                </tr>
              </tbody>
              <thead>
                <tr>
                  <th>Passwords</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>use_passwd:</td>
                  <td>yes</td>
                  <td>This provides the option for the users to input their password when individually punching in/out. Default='no'</td>
                </tr>
                <tr>
                  <td>use_reports_password</td>
                  <td>no</td>
                  <td>If ALL users need access to ALL reports provided, then set this to 'no'. Default='no'</td>
                </tr>
              </tbody>

            </table>
          </div>
        </main>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
