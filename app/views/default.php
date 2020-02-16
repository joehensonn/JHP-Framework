<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?=$data['title'];?></title>
  </head>
  <body>

  <!-- Core application view files - we can include each page dynamically below -->
  <?php $this->loadView($data['page'], $data); ?>

  </body>
</html>