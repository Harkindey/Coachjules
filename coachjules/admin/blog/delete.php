<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/9/2016
 * Time: 11:19
 */
require '../../app/start.php';

if (isset($_GET['id'])){
    $post_select = $db->prepare('SELECT postImage FROM blog_posts WHERE postId =:pid');
    $post_select->execute(array(':pid'=>$_GET['id']));
    $imgRow=$post_select->fetch(PDO::FETCH_ASSOC);
    unlink('../../'.$imgRow['postImage']);

    // it will delete an actual record from db
    $post_delete = $db->prepare('DELETE FROM blog_posts WHERE postId =:pid');
    $post_delete->execute(['pid' => $_GET['id']]);
}
header('Location: ' . BASE_URL . '/admin/index.php');