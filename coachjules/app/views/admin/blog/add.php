<?php require VIEW_ROOT . '/admin/templates/header.php';?>
<div class="add_page">
    <div class="well">
        <h2>Add Post</h2>
        <div id="cancel">
            <a href="<?php echo BASE_URL; ?>/admin/blog/list.php">
                <div class="cancel">
                    <p>Cancel</p>
                </div>
            </a>
        </div>
        <div>
            <?php if (isset($errMSG)): ?>
                <?php echo $errMSG; ?>
            <?php endif; ?>
        </div>

        <form action="<?php echo BASE_URL; ?>/admin/blog/add.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="title">
                Title
                <input type="text" name="title" id="title"/>
            </label>
            <label for="post_image">
                Image
                <input class="input-group" type="file" name="post_image" accept="image/*"/>
            </label>
            <label for="pdesc">
                Description
                <textarea name="pdesc" id="pdesc" cols="30" rows="10"></textarea>
            </label>
            <label for="cont">
                Content
                <textarea name="cont" id="cont" cols="30" rows="10"></textarea>
            </label>
            <input type="submit" name="add" class="btn btn-info" value="Publish"/>
        </form>
    </div>
</div>

<?php require VIEW_ROOT . '/admin/templates/footer.php';?>
