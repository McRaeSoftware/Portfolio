<html>
<?php
  include 'Model/connection.php';
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- image for tabs in browser -->
    <link rel="icon" href="Images/McRaeChevron.jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>

    <!-- Custom Css -->
    <style>
    <?php include 'Model/theme.css'; ?>
    </style>
    <title>McRae - Portfolio</title>
</head>

<body id="welcome">
<div class="row">

  <div class="w50">
    <h1 class="text-light">David McRae</h1>
    <hr>
    <h2>Links</h2>
  </div>

</div>
<div class="center">
  <i class="fab fa-github fa-3x"></i><h4 class="m0"><a href="https://github.com/McRaeSoftware" target="_blank">GitHub</a></h4></br>
</div>
<div class="center">
  <i class="fab fa-linkedin fa-3x"></i><h4 class="m0"><a href="https://linkedin.com/in/David-McRae-Software" target="_blank">LinkedIn</a></h4>
</div>

<!-- Button to enter the portfolio page -->
<div class="row pt5">
  <div class="w50">
    <a class="btn white" href="View/portfolio.php">Portfolio</a>
  </div>
</div>

<?php
?>

<!-- Footer -->
<footer class="row">
  DNS server by © <a href="http://freedns.afraid.org/">Free DNS</a>
</footer>

<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/fac0cbcd08.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
</body>
</html>
