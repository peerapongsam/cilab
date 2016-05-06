<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Message</title>
    <link href="<?php echo site_url("/assets/css/main.css");?>" rel="stylesheet">
  </head>
  <body>
      <div class="form-link" style="text-align:center;"><a href="<?=site_url("message/new_message");?>">Add New Message</a></div>
    <?php
        foreach ($messages as $message) {
            $class = '';
            $username = $this->session->userdata('username');
            if ($message->username  == $username) {
                $class = ' owner';
            }
            $text = '<div class="message' . $class .'">';
            $text .= '<div class="top"><div class="topic">' . $message->topic . '</div>';
            if ($message->username  == $username) {
                $text .= '<div class="edit"><a href="' . site_url('/message/edit/' . $message->id) . '">Edit</a></div>';
            }
            $text .= '</div><div>' . $message->desc . '</div>';
            $text .= '<div><div class="username">' . $message->username . '</div>';
            $text .= '<div class="create_time">' . $message->create_time . '</div></div>';
            $text .= '</div>';
            echo $text;
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
