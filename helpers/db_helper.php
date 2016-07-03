<?php
/*
 *	Get # of replies per topic
 */
function replyCount($topic_id){
	$db = new Database;
	$db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
	$db->bind(':topic_id', $topic_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
}
/*
 *	Get Categories
 */
function getCategories(){
	$db = new Database;
	$db->query('SELECT * FROM categories');
	
	//Assign Result Set
	$results = $db->resultset();

	return $results;
}

/*
 * Add classname active if category is active
 */
function is_active($category){
		if(isset($_GET['category'])){
			if($_GET['category'] == $category){
				return 'active';
			} else {
				return '';
			}
		} else {
			if($category == null){
				return 'active';
			}
		}
}