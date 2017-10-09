<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

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
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Analytics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Export</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Nav item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nav item again</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">One more nav</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Another nav item</a>
            </li>
          </ul>
        </nav>
        <!-- Main -->
        <main class="col-sm-9 ml-sm-auto col-md-10 col-lg-12 pt-3" role="main">
          <h1 class="text-center">Employee Dashboard</h1>
             <!-- <h3>Employee Clock In/Out</h3> -->
            <div class="row">
              <div class="col-md-12">
              <form class="form-signin">

                <div class="form-group" style="width: 30%; display: block; margin:auto;">
                  
              <h2 class="form-signin-heading text-center">12:10 am</h2>
              <h2 class="form-signin-heading text-center">10/8/2017</h2>
              <hr>
              <label for="inputID" class="sr-only">Employee ID#</label>
              <input type="id" id="inputID" class="form-control" placeholder="Employee ID #" required autofocus>
              <label for="inputPin" class="sr-only">Pin</label>
              <input type="password" id="inputPin" class="form-control" placeholder="Pin" required>
              <button class="btn btn-lg btn-dark btn-block" type="submit">Clock In</button>
              <button class="btn btn-lg btn-dark btn-block" type="submit">Clock Out</button>
              </div>
            </form>
              </div>
            </div>


          <!-- <h4>Heading</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>In/Out</th>
                  <th>Time</th>
                  <th>Date</th>
                  <th>Group</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>23456</td>
                  <td>Lorem</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>I have a 10 year old son. He has words. He is so good with these words it's
unbelievable.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>amet</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>You could see there was text coming out of her eyes, text coming out of her
wherever. You’re disgusting. You have so many different things placeholder text
has to be able to do, and I don't believe Lorem Ipsum has the stamina.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>Integer</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>Look at these words. Are they small words? And he referred to my words - if
they're small, something else must be small. I guarantee you there's no problem,
I guarantee. Lorem Ipsum best not make any more threats to your website.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>libero</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>Lorem Ipsum is the single greatest threat. We are not - we are not keeping up
with other websites. I have a 10 year old son. He has words. He is so good with
these words it's unbelievable.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>dapibus</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>I know words. I have the best words. We have so many things that we have to do
better... and certainly ipsum is one of them.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>Nulla</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>You’re disgusting. The concept of Lorem Ipsum was created by and for the Chinese
in order to make U.S. design jobs non-competitive. Look at that text! Would
anyone use that? Can you imagine that, the text of your next webpage?!Employee notes:</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>nibh</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>I don't think anybody knows it was Russia that wrote Lorem Ipsum, but I don't
know, maybe it was. It could be Russia, but it could also be China.
</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>sagittis</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>You know, it really doesn’t matter what you write as long as you’ve got a young,
and beautiful, piece of text.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>Fusce</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>I think the only difference between me and the
other placeholder text is that I’m more honest and my words are more beautiful.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>augue</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td> It could
also be lots of other people. It also could be some wordsmith sitting on their
bed that weights 400 pounds. Ok? </td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>massa</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>Lorem Ipsum is FAKE TEXT! You know, it really doesn’t matter what you write as
long as you’ve got a young, and beautiful, piece of text. </td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>eget</td>
                  <td>In</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>It’s about making
placeholder text great again. That’s what people want, they want placeholder
text to be great again.</td>
                </tr>
                <tr>
                  <td>23456</td>
                  <td>taciti</td>
                  <td>Out</td>
                  <td>10:11am</td>
                  <td>10/7/2017</td>
                  <td>Marketing</td>
                  <td>He’s not a word hero. He’s a word hero because he was captured. I like text that
wasn’t captured. </td>
                </tr>
              </tbody>
            </table>
          </div> -->

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
