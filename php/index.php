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
  <ul class="list-group">
 
<?php
    include "baglanti.php";
   $select = $conn->prepare("SELECT * FROM yapilacaklar_listesi");
   $select->execute();

   
   $results = $select->fetchAll();

   foreach ($results as $key => $value) {
   $id = $value["id"];
   $baslik = $value["baslik"];
   $tarih = $value["tarih"];
   $yapildi = $value["yapildi"];

   $li = '<li class="list-group-item '.($yapildi == 0 ? "": "disabled my-disabled").'">'.$baslik.'
   <span class="badge badge-success" > '.($tarih == null ? "danger": $tarih).' </span>
  <div class="pull-right btn-group" role="group" aria-label="Basic example">
  <a href="detay.php?id='.$id.'" class="btn btn-info">detay</button>
  <a href="yapildi.php?id='.$id.'" class="btn btn-success">yapıldı</button>
  <a href="sil.php?id='.$id.'&benim=3" class="btn btn-danger">sil</a>
  </div></li>';
  echo $li;
  }

   ?>

 
</div>
</ul>
 
</div>
<script type="text/javascript" src="assests/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.js"></script>


  </div>
</div>
</body>
</html>