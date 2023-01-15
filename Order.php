<?php
$br = "%0A";
  $nomor = $data->62895386116581

  $pesan = "HALO ADMIN".$br.$br;
  
  $send = "https://wa.me/".$nomor."?text=".$pesan;

  return header("Location: $send");


  }
  








} else {
  $error = "";
  $validid = "";
}


 ?>



