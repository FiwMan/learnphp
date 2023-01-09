<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/background.css'>
    <link rel='stylesheet' href='../css/test.css'>
    <link rel='stylesheet' href='../bootstrap-5.0.2-dist/css/bootstrap.min.css'>
    <title>Register</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="register.php">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">ContactUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="test.php">test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="test2.php">test2</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>

    <p class='font'>หน้าสมัครใช้งาน</p>
        <form action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
        </form> 
</body>
</html>