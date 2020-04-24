<?php
/***
Este archivo existe porque el auto_return y las backurls no funcionaba como esperabamos.
Fernando Cuadrado
***/
if(isset($_REQUEST['back_url'])){
  header('Location: '.$_REQUEST['back_url']."&payment_id=".$_REQUEST['payment_id']);
  die;
}
?>
