<?php require('core/init.php'); ?>

<?php 

$topic = new Topic;

//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get Template;
$template = new Template('templates/topics.php');

//Assign Template Variables
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Post In "'.$topic->getCategory($category)->name.'"';
}
if(!isset($category)){
	$template->topics = $topic->getAllTopics();
}
//Assign Variables

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display Templates
echo $template;