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
  <h2 class="display-6">Detaylar</h2>
<?php
    include "baglanti.php";
$id = $_GET["id"];
    $select = $conn->prepare("SELECT * FROM yapilacaklar_listesi WHERE id =$id");
   $select->execute();

   
   $result = $select->fetch();
    $baslik = $result["baslik"];
    $aciklama = $result["aciklama"];
   $yapildi = $result["yapildi"];
   $baslik = $result["olusturma_tarihi"];
  $baslik = $result["guncelleme_tarihi"];
  $tarih = $results["tarih"];
  ?>

  <table class="table">
    <tr>
      <th>başlık</th>
        <td>
          <?php echo $baslik ?>
        </td> 
    </tr>
    <th>açıklama</th>
      <tr>
      <td>
        <?php echo $aciklama ?>
      </td>
    </tr>
    <tr>
      <th>
        tarih
      </th>
      <td>
        <?php echo $tarih ?>
      </td>
    </tr>
    <tr>
      <th>
        oluşturma tarihi
      </th>
      <td>
        <?php echo $olusturma_tarihi ?>
      </td>
      <tr>
        <th>
          güncelleme tarihi
        </th>
        <td>
          <?php echo $guncelleme_tarihi ?>
        </td>
      </tr>
  </table>
</div>
<script type="text/javascript" src="assests/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.js"></script>


</body>
</html>