<?php


  $width=$_POST['width2'];
  $height=$_POST['height2'];
  $file=$_FILES['file-input'];
  $uploaded_image=$file['tmp_name'];
  $type=$file['type'];
  $random=rand(1,91827281891);
  if($type=="image/jpeg")
  {

  	$image_pexels=imagecreatefromjpeg($uploaded_image);
  	$o_width=imagesx($image_pexels);
  	$o_height=imagesy($image_pexels);
  	$canvas=imagecreatetruecolor($width, $height);
  	imagecopyresampled($canvas,$image_pexels,0,0,0,0,$width,$height,$o_width,$o_height);
  	if(imagejpeg($canvas,"../images/".$random.".jpg"))
  	{
  		echo $random.".jpg";
  	}
  	imagedestroy($image_pexels);

  }

    if($type=="image/png")
  {

  	$image_pexels=imagecreatefrompng($uploaded_image);
  	$o_width=imagesx($image_pexels);
  	$o_height=imagesy($image_pexels);
  	$canvas=imagecreatetruecolor($width, $height);
  	imagecopyresampled($canvas,$image_pexels,0,0,0,0,$width,$height,$o_width,$o_height);
  	if(imagepng($canvas,"../images/".$random.".png"))
  	{
  		echo $random.".png";
  	}
  	imagedestroy($image_pexels);

  }

    if($type=="image/gif")
  {

  	$image_pexels=imagecreatefromgif($uploaded_image);
  	$o_width=imagesx($image_pexels);
  	$o_height=imagesy($image_pexels);
  	$canvas=imagecreatetruecolor($width, $height);
  	imagecopyresampled($canvas,$image_pexels,0,0,0,0,$width,$height,$o_width,$o_height);
  	if(imagegif($canvas,"../images/".$random.".gif"))
  	{
  		echo $random.".gif";
  	}
  	imagedestroy($image_pexels);

  }

    if($type=="image/bmp")
  {

  	$image_pexels=imagecreatefrombmp($uploaded_image);
  	$o_width=imagesx($image_pexels);
  	$o_height=imagesy($image_pexels);
  	$canvas=imagecreatetruecolor($width, $height);
  	imagecopyresampled($canvas,$image_pexels,0,0,0,0,$width,$height,$o_width,$o_height);
  	if(imagebmp($canvas,"../images/".$random.".bmp"))
  	{
  		echo $random.".bmp";
  	}
  	imagedestroy($image_pexels);

  }

      if($type=="image/webp")
  {

  	$image_pexels=imagecreatefromwebp($uploaded_image);
  	$o_width=imagesx($image_pexels);
  	$o_height=imagesy($image_pexels);
  	$canvas=imagecreatetruecolor($width, $height);
  	imagecopyresampled($canvas,$image_pexels,0,0,0,0,$width,$height,$o_width,$o_height);
  	if(imagewebp($canvas,"../images/".$random.".webp"))
  	{
  		echo $random.".webp";
  	}
  	imagedestroy($image_pexels);

  }










?>