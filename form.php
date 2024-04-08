
<?php

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$headers="from: ".$correo."/r/n";
$headers.="Content-Type: text/html; charset=ISO-8859-1/r/n";
mail('joakispiller22@gmail.com', 'mensaje Cocodrilo Verde',$mensaje, $headers);

echo'
<body style="  background-image: url(img/abejas.jpg);">
<div style="width: 30%; margin:auto; ">
<p style= " color: black; padding:20px; font-family: Arial; font-size: 30px; text-align: center; margin-top: 200px; background-color: #E7C85A; border: 1px solid black; border-radius: 10px;"> <span style="font-size:31px;">'.$nombre.' </span> tu mensaje : <br> <span style="color: rgba(0, 0, 0, 0.696);;"> '.$mensaje.' </span> <br> se ha enviado correctamente y será respondido pronto.</p>
</div>
</body> 
';



?>
