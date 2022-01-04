<?php

  $email = $_POST['email'];

  // VERIFICAR OQUE VEM NA REQUEST
  // var_dump($_POST);

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret" => "6LcJXe8dAAAAAGIOEkd78Dop_qq-n-Ud3CeO2i6C",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
  )));

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $recaptcha = json_decode(curl_exec($ch), true);

  curl_close($ch);

if($recaptcha["success"] === true) {
  //AQUI SERIA A CONTINUAÇÃO DO FLUXO DA SUA APLICACO
  echo "Validação com sucesso no email: ". $email;
}else{
  header("Location: reCaptcha.php");
}

?>