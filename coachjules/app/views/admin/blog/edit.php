<?php require VIEW_ROOT . '/admin/templates/header.php';?>
<div class="add_page">
    <div class="well">
        <h2>Edit Post</h2>
        <div id="cancel">
            <a href="<?php echo BASE_URL; ?>/admin/blog/list.php">
                <div class="cancel">
                    <p>Cancel</p>
                </div>
            </a>
        </div>
        <div class="img_edit">
            <img class="thumbnail img-responsive" src="<?php echo BASE_URL .'/'. $post['postImage']; ?>">
        </div>
        <form action="<?php echo BASE_URL; ?>/admin/blog/edit.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="title">
                Title
                <input type="text" name="title" id="title" value="<?php echo escp($post['postTitle']); ?>"/>
            </label>
            <label for="pdesc">
                Description
                <textarea name="pdesc" id="pdesc" cols="30" rows="10"><?php echo escp($post['postDesc']); ?></textarea>
            </label>
            <label for="cont">
                Post
                <textarea name="cont" id="cont" cols="30" rows="10"><?php echo escp($post['postCont']); ?></textarea>
            </label>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>"/>
            <input type="submit" name="update" class="btn btn-info" value="Update"/>
        </form>
    </div>
</div>

<?php require VIEW_ROOT . '/admin/templates/footer.php';?>
