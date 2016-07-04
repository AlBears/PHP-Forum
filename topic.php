<?php require('core/init.php'); ?>

<?php 
//topic object
$topic = new Topic;
// aquire id from url
$topic_id = $_GET['id'];

$template = new Template('templates/topic.php');

//Assign Variables
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Display Templates
echo $template;