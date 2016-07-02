<?php require('core/init.php'); ?>

<?php 

$template = new Template('templates/frontpage.php');

//Assign Variables
$template->heading = 'This is the template heading';

//Display Templates
echo $template;