<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="<?php echo site_url("/assets/css/main.css");?>" rel="stylesheet">
  </head>
  <body>
    <div class="form">

      <?php echo form_open() ?>
        <h1>Register</h1>
        <?php
          if ($validation_errors != '') {
            echo '<div class="error">' . $validation_errors . '</div>';
          }
        ?>
        <div class="form-control">
          <input class="form-input" name="email" id="email" type="text" value="<?php echo set_value("email", "", true) ?>" placeholder="Email">
        </div>
        <div class="form-control">
          <input class="form-input" name="username" id="username" type="text" value="<?php echo set_value("username", "", true) ?>" placeholder="Username">
        </div>
        <div class="form-control">
          <input class="form-input" name="password" id="password" type="password" value="<?php echo set_value("password", "", true) ?>" placeholder="Password">
        </div>
        <div class="form-control">
          <input class="form-input" name="passconf" id="passconf" type="password" value="<?php echo set_value("passconf", "", true) ?>" placeholder="Password Confirmation">
        </div>
        <div class="form-control">
          <input class="form-input form-submit" name="register" id="register" type="submit" value="Register">
        </div>
      </form>
      <div class="form-link"><a href="<?=site_url("login");?>">Member Login</a></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
