<?php require('core/init.php'); ?>

<?php 
//Create Topic Object
$topic = new Topic;

//Get template
$template = new Template('templates/frontpage.php');

//Assign Variables
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display Templates
echo $template;