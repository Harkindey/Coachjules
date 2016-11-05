<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/11/2016
 * Time: 12:27
 */
require '../app/start.php';
require VIEW_ROOT . '/paginator.php';

//instantiate the class
$pages = new Paginator('5','p');

//collect all records fro the next function
$stmt = $db->query('SELECT postID FROM blog_posts');

//determine the total number of records
$pages->set_total($stmt->rowCount());


$blogPosts = $db->query(
    "SELECT postID, postTitle, postImage, postDesc, postCont, postDate
    FROM blog_posts
    ORDER BY postDate DESC ".$pages->get_limit());
$blogPosts->execute();
$blogPosts = $blogPosts->fetchAll(PDO::FETCH_ASSOC);

$rPosts = $db->query(
    'SELECT postID, postTitle, postImage, postDesc, postCont, postDate
    FROM blog_posts
    ORDER BY postDate DESC 
    LIMIT 1,5'
);
$rPosts->execute();
$rPosts = $rPosts->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/blog.php';