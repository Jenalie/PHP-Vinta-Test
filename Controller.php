<?php 

define('ROOT', __DIR__);
require_once(ROOT . '/utils/NewsManager.php');
require_once(ROOT . '/utils/CommentManager.php');

if(isset($_POST['action'])){ 

    if($_POST['action'] == "delete"){
        //Delete news and comments record with the same news ID
        $result = NewsManager::getInstance()->deleteNews($_POST['id']);
    }
    else if($_POST['action'] == "add"){
        //Add new record under news and comment
        $newsId = NewsManager::getInstance()->addNews($_POST['title'], $_POST['body']);
        $result = CommentManager::getInstance()->addCommentForNews($_POST['comment'], $newsId);
    }

    header("Content-type: application/json");
    echo json_encode(["result" => $result]);
}

?>