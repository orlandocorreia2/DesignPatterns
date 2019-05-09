<?php

require('MP3.php');
require('Photo.php');
require('Video.php');

$mp3 = new MP3('Arquivo de música', '1 mega');
$photo = new Photo('Arquivo de foto', '2 mega');
$video = new Video('Arquivo de vídeo', '5 mega');

$mp3->open();

$photo->open();
$photo->edit();
$photo->print();

$video->open();
$video->edit();
