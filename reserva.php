<?php


if (isset($_POST ["enviar"])) {
    if (!empty($_POST["fechai"])&&
     !empty($_POST["fechas"]) && 
     !empty($_POST["destino"])&&
     !empty($_POST["nombre"])&&
     !empty($_POST["correo"])&&
     !empty($_POST["telefono"])
     ) {
 $fechai= $_POST ["fechai"];
$fechas= $_POST["fechas"];
$destino= $_POST["destino"];
$nombre= $_POST["nombre"];
$correo= $_POST["coreo"];
$telefono= $_POST["telefono"];
$header= "from: anahimailendiaz@gmail.com ";
$header.="repli-to: anahimailendiaz@gmail.com";
$header.="x-mailer : php/".phpversion();
$mail= @mail($fechai,$fechas,$destino,$nombre,$correo,$telefono);
if ($mail) {
    echo "<h4>!Enviado con exito</h4>";
}
    }
}




