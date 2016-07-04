<?php require('core/init.php'); ?>

<?php 

$topic = new Topic;

//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get user from URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template;
$template = new Template('templates/topics.php');

//Assign Template Variables
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Post In "'.$topic->getCategory($category)->name.'"';
}
//Check for user filters
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}



if(!isset($category) && !isset($user_id)){
	$template->topics = $topic->getAllTopics();
}
//Assign Variables

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display Templates
echo $template;