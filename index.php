<!doctype html>
<?php include 'config.php' ?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Metin2, Silkroad ve Knight pvp server listesi.">
      <title>Pvp Serverler | Pvpler.Net</title>
	  <link rel="shortcut icon" href="assets/images/pvp-icon.png">
      <!-- Bootstrap core CSS -->
      <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
         body
         {
         font-family: 'Poppins', sans-serif;
         font-size: 1.125rem;
         }
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
      </style>
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
    <?php include 'component/navbar.php' ?>
	<?php include 'component/carousel.php' ?>
	<?php include 'serverlist/mt2-serverlist.php' ?>
	<?php include 'serverlist/silkroad-serverlist.php' ?>
	<?php include 'serverlist/knight-serverlist.php' ?>
	<?php include 'component/footer.php' ?>
   <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>