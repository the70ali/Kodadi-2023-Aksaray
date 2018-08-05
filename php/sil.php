<?php

include "baglanti.php";


var_dump($_GET);
$id = $_GET["id"];
$benim = $_GET["&benim"];

$sql = "DELETE FROM yapilacaklar_listesi WHERE id=$id";

$conn->exec($sql);

header("Refresh:2; url=index.php");
echo "Kayıt başarıyla silindi. Ana sayfaya yönlendiriliyorsunuz lütfen bekleyin."
?>