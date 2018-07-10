<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->


    <title>@yield ('title')</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
  </head>

<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="/Homepage">Medical Assistance</a>

    <div style="margin-left:auto; margin-right:15px;">
      <ul class="navbar-nav"> 
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">The Doctors</a>
          </li>
          <a class="btn btn-outline-primary" href="#">Sign in</a>
      </ul>
      
  </div>
</nav>
<br>
<br>
<br>


<div class="row">
      <div class="col-md-4 order-md-7 mb-4">
              <h4>
                <span class="text-muted">Doctor Registration</span>
              </h4>
      <form method="POST" action="/registerDoctor">

      {{ csrf_field() }}

      <div class="form-group">

        <label for="email">Email:</label>

        <input type="email" class="form-control" id="email" name="email" required>

        <label for="password">Password:</label>

        <input type="password" class="form-control" id="password" name="password" required>

        <!-- <label for="password-confirmation">Password Confirmation:</label>

        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required> -->

        <label for="firstname">First Name:</label>

        <input type="text" class="form-control" id="firstname" name="firstname" required>

        <label for="middlename">Middle Name:</label>

        <input type="text" class="form-control" id="middlename" name="middlename" required>

        <label for="lastname">Last Name:</label>

        <input type="text" class="form-control" id="lastname" name="lastname" required>

        <label for="expertise">Expertise:</label>

        <input type="text" class="form-control" id="expertise" name="expertise" required>

        <div class="form-group">

          <br>

          <button type="submit" class="btn btn-primary">Register</button>
          
        </div>

        <div class="form-group">
          @include ('layouts.errors')
        </div>


      </div>

    </form>
            </div>






    <div class="col-md-8 order-md-1">
              <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">MEDICAL ASSISTANCE</h1>
        <p class="lead font-weight-normal">Diri ka makapatambal sa imung mga bisan unsang gabatian nga kasakit.</p>
        <a class="btn btn-outline-secondary active" href="#">Doctor</a>
        <a class="btn btn-outline-secondary" href="#">Patient</a>
      </div></div>
            </div>
</div>
</body>

