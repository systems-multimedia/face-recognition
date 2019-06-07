<?php

require "lib/FaceDetector.php";

use sway\FaceDetector;

$faceDetect = new FaceDetector();
$faceDetect->faceDetect($_FILES['image']['tmp_name']);
$faceDetect->toJpeg();