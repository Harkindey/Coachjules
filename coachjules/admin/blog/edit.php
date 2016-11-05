<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/8/2016
 * Time: 14:07
 */
require '../../app/start.php';

if(!empty($_POST)){
    $id         =$_POST['id'];
    $title      = $_POST['title'];
    $desc       = $_POST['pdesc'];
    $cont       = $_POST['cont'];

    $updatePost = $db->prepare("
        UPDATE blog_posts
        SET
         postTitle = :title,
         postCont = :cont,
         postDesc = :pdesc
        WHERE id = :pid
    ");
    $updatePost->execute([
        'pid'   => $id,
        'title' => $title,
        'pdesc'  => $desc,
        'cont'  => $cont,
    ]);

    header('Location: ' . BASE_URL . '/admin/index.php');
}

if (!isset($_GET['id'])){
    header('Location: ' . BASE_URL . '/admin/index.php');
    die();
}

$post = $db->prepare('
    SELECT postID, postTitle, postImage, postDesc, postCont, postDate
    FROM blog_posts
    WHERE postId = :id
');

$post->execute(['id' => $_GET['id']]);

$post = $post->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/blog/edit.php';