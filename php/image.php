<?php

$width=$_POST['width'];
$height=$_POST['height'];
$red=$_POST['red'];
$green=$_POST['green'];
$blue=$_POST['blue'];
$format=$_POST['format'];


$size=imagecreate($width,$height);
imagecolorallocate($size,$red,$green,$blue);
$random=rand(1,100);

 if($format == "jpeg")
   {
      if(imagejpeg($size,"../images/".$random.".jpg"))
    {
	echo $random.".jpg";
     }
    
     imagedestroy($size);
}

   else if($format == "gif")
{
    if(imagegif($size,"../images/".$random.".gif"))
{
	echo $random.".gif";;
}
    imagedestroy($size);
}

  else if($format == "png")
{
if(imagepng($size,"../images/".$random.".png"))
{
	echo $random.".png";
}
imagedestroy($size);
}

else{
  echo "not image format";
}



?>