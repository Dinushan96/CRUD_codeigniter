<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">SIYAGO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="defult"><a href="<?php echo base_url('index.php/Ranindu/index'); ?>">Home</a></li>
      <li><a href="<?php echo base_url ('index.php/Ranindu/addflight'); ?>">ADD FLIGHT</a></li>
      <li><a href="<?php echo base_url ('index.php/Ranindu/updateflight'); ?>">UPDATE FLIGHT</a></li>
      <li><a href="<?php echo base_url ('index.php/Ranindu/deleteflight'); ?>">DELETE FLIGHT</a></li>
      <li><a href="<?php echo base_url ('index.php/Ranindu/displayflight'); ?>">DISPLAY FLIGHT</a></li>
    </ul>
  </div>
</nav>


</body>
</html>