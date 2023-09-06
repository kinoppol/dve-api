<?php
require_once('limonade/lib/limonade.php');
require_once('../dve-api-config/dve-api.cfg.php');
$APP_NAME=$_POST['app'];
$TOKEN=$_POST['token'];
$chk_token=md5($APP_NAME.$SEED);
if($TOKEN!=$chk_token){
  die('Access denined.');
}
dispatch('/','welcome');
require_once('home/function.php');
run();