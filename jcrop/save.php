<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

extract($_POST);

// open file a image resource
$img = Image::make($filename);

$avatar = basename($filename);
// crop image
$img->crop($cropw, $croph, $cropx, $cropy)->save('./upload/avatar_'.$avatar);
// $img->crop(111,111,0,0);

echo '<img src="./upload/avatar_'.$avatar.'">';


