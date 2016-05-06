<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Message</title>
    <link href="<?php echo site_url("/assets/css/main.css");?>" rel="stylesheet">
  </head>
  <body>
    <div class="form">
      <?php echo form_open() ?>
        <h1>New Message</h1>
        <?php
            if ($validation_errors != '') {
            echo '<div class="error">' . $validation_errors . '</div>';
            }

            $topic = '';
            $desc = '';
            if (isset($message)) {
              $topic = $message->topic;
              $desc = $message->desc;
            }
        ?>
        <div class="form-control">
          <input class="form-input" name="topic" id="topic" type="text" value="<?php echo set_value("topic", $topic, true) ?>" placeholder="Topic">
        </div>
        <div class="form-control">
          <textarea class="form-input" name="desc" id="desc" placeholder="Desc"><?php echo set_value("desc", $desc, true) ?></textarea>
        </div>
        <div class="form-control">
          <input class="form-input form-submit" name="send" id="send" type="submit" value="Send">
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
