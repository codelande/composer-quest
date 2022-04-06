<?php

require "../vendor/autoload.php";

use App\Wcs\Hello as coco;

$hello = new coco;

echo $hello->talk();
