<?php
$con = mysqli_connect('ecom', 'root','','ecom');
if(!$con){
  die('нету соединения');
  exit;
}