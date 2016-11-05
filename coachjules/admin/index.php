<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/7/2016
 * Time: 16:29
 */
require '../app/start.php';
session_name("admin");
session_Start();
if(!isset($_SESSION['log']) && $_SESSION['log'] !='Barack'){ //If session not registered
header("location:login.php"); // Redirect to login.pBarccckhp page
}

/*$blogPosts = $db->query(
    'SELECT postID, postTitle, postImage, postDesc, postCont, postDate
    FROM blog_posts
    ORDER BY postDate DESC '
)->fetchAll(PDO::FETCH_ASSOC);
*/
$result = mysqli_query($dbC, 'SELECT postID, postTitle, postImage, postDesc, postCont, postDate
    FROM blog_posts
    ORDER BY postDate DESC ') or die(mysqli_error($dbC));

	$row=mysqli_fetch_assoc($result);

	var_dump($row);

// require  VIEW_ROOT . '/admin/blog/list.php';