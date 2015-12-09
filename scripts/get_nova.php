<?php

  $selection = "nova";

  $img_dir = "../images/".$selection."/";
  $img_dir_full = "./images/".$selection."/";

  $images = scandir($img_dir);

  $html = '';

  $html .='<ul>';
  foreach($images as $img)     {
    if($img === '.' || $img === '..') {continue;}

      // image types
      if (  (preg_match('/.jpg/',$img))  ||  (preg_match('/.gif/',$img)) ||  (preg_match('/.svg/',$img)) || (preg_match('/.tiff/',$img)) || (preg_match('/.png/',$img)) ) {

       $html .='<li><div><p>'.$img.'</p><a href="'.$img_dir_full.$img.'" download="'.$img_dir_full.$img.'" alt=""><img src="'.$img_dir_full.$img.'" ></a></div></li>' ;
      } else { continue; }
    }
  $html .='</ul>' ;

  echo $html ;

?>