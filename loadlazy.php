<?php
 $directory = '/img';
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 $dir = new DirectoryIterator(dirname(__FILE__) . $directory);
 foreach ($dir as $fileinfo) {
     if (!$fileinfo->isDot()) {
         echo "<ul>";
         echo "<li><a href='img/". $fileinfo->getFilename(). "'><img src='img/".$fileinfo->getFilename()."' loading=\"lazy\"/></a></li>";
         echo "</ul>";
     }
 }