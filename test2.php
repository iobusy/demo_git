<?php
// Ne fonctionne pas si l'encodage est different de ANSI

header ("Content-type: image/png");
$image = imagecreate(200,50);
$orange = imagecolorallocate($image, 255, 128, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 4, 35, 15, "Salut !", $blanc);
imagepng($image);
//header('Content-Type: image/png');
//$im = imagecreatefrompng("images/logo.png");

// imagepng($im,NULL,0,NULL);
//imagepng($im);
//imagedestroy($im);
?>
