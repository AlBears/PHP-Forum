<?php require('core/init.php'); ?>

<?php 
//Create Topic Object
$topic = new Topic;

//Get template
$template = new Template('templates/frontpage.php');

//Assign Variables
$template->topics = $topic->getAllTopics();

//Display Templates
echo $template;