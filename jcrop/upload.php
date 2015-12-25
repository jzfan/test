<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$tmp = $_FILES['file']['tmp_name'];
$uploadfile = './upload/' . basename($_FILES['file']['name']);

// and you are ready to go ...
if(Image::make($tmp)->save($uploadfile)){

	echo $uploadfile;
}



