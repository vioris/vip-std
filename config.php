<?php 


ini_set('display_errors', 1);

$page = $_GET['pages'];

   include "pages/$page.php";
 
   
// DIR
define('DIR_ROOT', __DIR__ );

define('HEAD', DIR_ROOT . '/inc/head.php');
define('DIR_IMAGE', DIR_ROOT . '/img');
define('DIR_INC', DIR_ROOT . '/inc');
define('DIR_VIEW', DIR_ROOT . '/view' );
define('DIR_CONFIG', DIR_ROOT . '/config.php');


?>
