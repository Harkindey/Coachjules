<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/7/2016
 * Time: 18:11
 */
require '../../app/start.php';

if(isset($_POST['add'])){
    $title      = $_POST['title'];
    $pdesc       = $_POST['pdesc'];
    $cont       = $_POST['cont'];
    $imgFile    = $_FILES['post_image']['name'];
    $tmp_dir    = $_FILES['post_image']['tmp_name'];
    $upload_dir = '../../images';
    $imgExt     = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    $p_pic      = rand(1000,1000000).".".$imgExt;
    if (in_array($imgExt, $valid_extensions)){
        move_uploaded_file($tmp_dir, $upload_dir.'/'.$p_pic);
    }
    else{
        $errMSG = "Sorry, only JPG, JPEG, PNG, GIF files are allowed";
    }
    if (!isset($errMSG)){
        $add_post =$db->prepare('
              INSERT INTO blog_posts(postTitle, postImage, postDesc, postCont, postDate) VALUES(:title, :pPic, :pdesc :cont, NOW())
          ');
        $add_post->execute([
            'pPic' => 'photos/'.$p_pic,
            'title' => $title,
            'pdesc' => $pdesc,
            'cont' => $cont,
        ]);
        $successMSG = "New post added";
        header('Location: ' . BASE_URL . '/admin/index.php');
    }
    else {
        $errMSG = "error while adding post";
    }
}

require VIEW_ROOT . '/admin/blog/add.php';