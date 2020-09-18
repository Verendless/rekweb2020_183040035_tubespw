  <?php
    // require 'php/register.php';
    require 'php/register.php';
    if(isset($_POST['registrasi']))
    {
      if (registrasi($_POST) > 0) {
          echo "<script>
                  alert('Registrasi Sukses');
                  document.location.href = 'loginUser.php';
              </script>";
      }
      else {
        echo "<script>
                  alert('Registrasi Gagal');
                  document.location.href = 'daftar.php';
              </script>";
      }
    }
  ?>
  <!DOCTYPE html>
  <html>
    <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign Up</title>
    </head>
    <body>
		<form action="" method="post">
		<div class="row">
			<div class="col s12 m4 offset-m4">
				<div class="card kartu_atas">
					<div class="card-action warna white-text kartu_radius">
						<h3 class="center">SIGN UP</h3>
					</div>

					<div class="card-content ">
            <label for="username">
						<div class="input-field">
				      <i class="material-icons prefix">account_circle</i>
				      <input id="username" type="text" class="validate" name="username" minlength="3" required>
				      <label for="icon_prefix">Username</label>
				    </div>
            <ul class="input-requirements">
              <li>At least 3 characters long</li>
            </ul>
            <p id="usernameFieldResult"></p>
            </label>

            <label for="email">
            <div class="input-field">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email" required>
              <label for="icon_prefix">Email</label>
              <span class="helper-text right" data-error="Email Not Valid" data-success="Email Valid"></span>
              <ul class="input-requirements">
                <p id="emailFieldResult"></p>
              </ul>
            </div>
            </label>
            
            <label for="password">
						<div class="input-field">
				      <i class="material-icons prefix">lock</i>
				      <input id="password" type="password" class="validate" name="password" maxlength="100" minlength="8" required>
				      <label for="icon_prefix">Password</label>
				    </div>
            <ul class="input-requirements">
              <li>At least 8 characters long (and less than 100 characters)</li>
            </ul>
            </label>
            
            <label for="password_repeat">
				    <div class="input-field">
				      <i class="material-icons prefix">lock</i>
				      <input id="password_repeat" type="password" class="validate" name="password_repeat" maxlength="100" minlength="8" required>
				      <label for="icon_prefix">Repeat Password</label>
				    </div>
            </label>

						<div class="form-field kartu_bawah">
							<button name="registrasi" class="btn-large warna waves-effect waves-dark" style="width: 100%">Sign Up</button>
						</div>

						<p class="center grey-text">
							Already have an account? <a href="loginUser.php">Sign In</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		</form>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <script type="text/javascript" src="js/validate.js"></script>
    </body>
  </html>