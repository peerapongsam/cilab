<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body {
        font-family: Helvetica, Arial, Verdana, sans-serif;
        background: #02B294;
        font-size: 1em;
        color: #EEEEEE;
      }

      a {
        color: #F1F1F1;
        font-size: inherit;
      }

      .form {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        text-align: center;
      }

      .form h1 {
        text-align: center;
        font-size: 1.25em;
        padding: 20px;
      }
      .form .form-input {
        font-size: 1em;
        padding: 5px;
        background: #FFFFFF;
        margin: 5px auto;
        width: 85%;
        border-radius: 5px;
        line-height: 2em;
        border: #2EBFA6 1px solid;
      }
      .form .form-submit {
        border: #2EBFA6 1px solid;
        width: 85%;
        color: #80D8C9;
        background: #02B294;
      }

      .form .form-submit:hover {
        border: #FFFFFF 1px solid;
        width: 85%;
        color: #FFFFFF;
        background: #02B294;
      }
      .form-link {
        margin: 20px auto;
      }
    </style>
  </head>
  <body>
    <div class="form">
      <?php echo form_open() ?>
        <h1>Login</h1>
        <div class="form-control">
          <input class="form-input" name="email" id="email" type="text" value="<?php echo set_value("email", "", true) ?>" placeholder="Email">
        </div>
        <div class="form-control">
          <input class="form-input" name="password" id="password" type="password" value="<?php echo set_value("password", "", true) ?>" placeholder="Password">
        </div>
        <div class="form-control">
          <input class="form-input form-submit" name="login" id="login" type="submit" value="Login">
        </div>
      </form>
      <div class="form-link"><a href="<?=site_url("register");?>">Don't have an account? Register</a></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
