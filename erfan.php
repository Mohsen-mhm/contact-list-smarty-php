<?php
require('db.php');
$txt = "INSERT INTO `records` (`id`, `name`, `email`, `phone`, `submittedby`, `avatar`) VALUES (NULL, 'Name {{id}}', 'email{{id}}@gmail.com', '{{id}}', 'mohsen', 'banner_img21.png');";
for ( $i = 1 ; $i <= 10000000 ; $i++){
mysqli_query($con,  str_replace("{{id}}" , $i , $txt) ) or die('!');
}