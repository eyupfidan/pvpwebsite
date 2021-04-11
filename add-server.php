<!doctype html>
<?php include 'config.php' ?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Metin2 Silkroad ve Knight pvp serverlerini ekleyebilirsiniz.">
	  <link rel="shortcut icon" href="assets/images/pvp-icon.png">

      <title>Server Ekle | Pvpler.net</title>
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

<div class="container" style="margin-bottom:350px;">
	
		   <div style="margin-top:30px" class="alert alert-danger alert-dismissible fade show" role="alert">
          Dikkat! Lütfen eklemek istediğiniz pvp serverin bilgilerini doğru giriniz.
        </div>
		
	   <p align="center" class="display-6">Server Ekle</p>
	<form id="registrationForm" ><div class="mb-3">
          <input name="s_name" class="form-control form-control-lg" type="text" placeholder="Server İsmi" aria-label=".form-control-lg example">
        </div>
	<div class="input-group">
            <textarea style="height:250px" name="s_content" class="form-control" placeholder="Açıklama" aria-label="With textarea"></textarea>
    </div>
		<div class="mb-3" style="margin-top:10px">
          <select name="s_game" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="metin2" selected="metin2">Metin2</option>
            <option value="silkroad">Silkroad</option>
			<option value="knight">Knight</option>
          </select>
        </div>
	<div class="mb-3" style="margin-top:10px">
          <select name="s_type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected="Emek">Emek</option>
            <option value="Orta">Orta</option>
			<option value="Kolay">Kolay</option>
            <option value="Wslik">Wslik</option>
          </select>
        </div>
		
		<div class="mb-3">
          <input name="s_link" class="form-control form-control-lg" type="text" placeholder="Server Link" aria-label=".form-control-lg example">
        </div>
		<div class="col-12">
            <a href="" class="btn btn-primary" id="submitButton" type="submit">Gönder</a>
          </div>
		<div class="col-12" style="margin-top:10px">
			<div align="center" id="result_div"></div>
		</div>
	</form>
	   </div>
	<?php include 'component/footer.php' ?>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/ajax_response.js"></script> 
   </body>
</html>