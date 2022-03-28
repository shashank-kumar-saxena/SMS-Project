<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Date</title>
    <link href='../css/date.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php $id=$_REQUEST['sid']; ?>
    <div>
    <form action="present.php" method="post">
      <input type='date' name='date' required>
      <input type='hidden' name='sid' value='<?php echo $id;?>'>
      <input type='submit' name='submit' value='Submit'>
    </form>
  </div>
  </body>
</html>
