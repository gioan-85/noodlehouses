<?php
/*
   minhtri95@yahoo.com
  Code distribution prohibitted
*/

// These are required
require_once("includes/application_top.php");

$sts->read_template_file('main_template.php');
$sts->start_capture();
$sts->set_title('noodlehouses.ca');
$sts->set_description('');
$sts->set_keywords('');

// ****************************************	
// Content place below this line
// ****************************************
?>

<?php 
	echo 'Hello ' . $_COOKIE['username'] . '!'; 
	
?>

<?php
// ****************************************
// Content place above this line
// ****************************************
require_once("includes/application_bottom.php");
?>