<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assests/css/mycss.css">
	<title>to do list</title>
</head>
<body>

<?php include "navbar.php" ?>

<div class="jumbotron">
  <h2 class="display-6">Yapılacaklar Listesi</h2>
 <form method="post" action="yeni-kayit.php">
  <div class="form-group">
    <label for="baslik">Baslik</label>
    <input type="text" name="baslik" class="form-control" id="baslik" placeholder="Başlık">
  </div>
  <div class="form-group">
    <label for="aciklama">Aciklama</label>
    <textarea class="form-control" name="aciklama" id="aciklama" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="tarih">Tarih</label>
    <input type="datetime-local" name="tarih" class="form-control" id="tarih" >
  </div>
  <button type="submit" class="btn btn-primary"> Gönder</button>
</form>

<script type="text/javascript" src="assests/js/bootstrap.js"></script>
<script type="text/javascript" src="assests/js/javascript.js"></script>

  </div>
</div>


</body>
</html>