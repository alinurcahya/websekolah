<?php

if(isset($_GET['page'])) {
$page = $_GET['page'];
} else {
  $page = null;
}

$file = "../administrasi/$page.php";

if(!file_exists($file) || empty($page)){ 
    include "../administrasi/home.php"; 
  }else{ 
   echo "<iframe align=middle width=100% height=650 src=$file frameborder=0></iframe> "; 
}
?>