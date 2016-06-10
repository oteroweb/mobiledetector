<?php 
require "Mobile_Detect.php";

$detector = new Mobile_Detect;
if (!$detector->isMobile() ):
 
header("Location: desktop.php");
die();

 else:
header("Location: movil.php");
die();


endif

 ?>