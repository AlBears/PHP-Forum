<?php require('core/init.php'); ?>

<?php 
//Create Topic Object
$topic = new Topic;
$user = new User;

//Get template
$template = new Template('templates/frontpage.php');

//Assign Variables
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

//Display Templates
echo $template;