 <?php 
	require 'php/login.php';
  ?>
  <!DOCTYPE html>
  <html>
    <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    </head>

    <body>
		<form action="" method="post">
		<div class="row">
			<div class="col s12 m4 offset-m4">
				<div class="card kartu_atas">
					<div class="card-action warna white-text kartu_radius">
						<h3 class="center">SIGN IN</h3>
					</div>

					<div class="card-content">
						<div class="input-field">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" class="validate" name="username" required>
				          <label for="icon_prefix">Username</label>
				        </div>

						<div class="input-field">
				          <i class="material-icons prefix">lock</i>
				          <input id="icon_prefix" type="password" class="validate" name="password" required>
				          <label for="icon_prefix">Password</label>
				        </div>

				        <p>
					      <label class="checkbox" for="checkbox">
					        <input type="checkbox" name="remember" id="checkbox" class="filled-in" />
					        <span>Remember Me</span>
					      </label>
					    </p>

					    <?php if(isset($error)): ?>
							<p class="center" style="color: salmon; font-style: italic; padding-top: 20px;">Maaf, Username atau Password Salah!</p>
						<?php endif ?>
 
						<div class="form-field kartu_bawah">
							<button name="submit" class="btn-large warna waves-effect waves-dark" style="width: 100%">Sign In</button>
						</div>

						<p class="center grey-text">
							Don't have an account? <a href="daftar.php">Sign Up</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		</form>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
  </html>