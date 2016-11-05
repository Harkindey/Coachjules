<?php require VIEW_ROOT . '/admin/templates/header.php';?>
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo BASE_URL; ?>/admin/index.php">Blog</a></li>
                <li><a href="<?php echo BASE_URL; ?>/admin/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <h2>Admin</h2>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="<?php echo BASE_URL; ?>/admin/index.php">Blog</a></li>
                <li><a href="<?php echo BASE_URL; ?>/admin/logout.php">Logout</a></li>
            </ul><br>
        </div>
        <br>

        <div class="col-sm-9">
            <div class="well">
                <h4>Blog Posts</h4>
                <div id="add">
                    <a href="<?php echo BASE_URL; ?>/admin/blog/add.php">
                        <div class="add">
                            <p>Add Posts</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="well">
                <?php if (empty($blogPosts)): ?>
                    <p>Empty, add posts</p>
                <?php else: ?>
                    <table>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($blogPosts as $blogPost): ?>
                        <tr>
                            <td><?php echo escp($blogPost['title']); ?></td>
                            <td><?php
                                $blogPost['created'] = new DateTime($blogPost['created']);
                                echo $blogPost['created']->format('jS M Y h:i:sa');
                                ?>
                            </td>
                            <td class="edit"><a href="<?php echo BASE_URL; ?>/admin/blog/edit.php?id=<?php echo escp($blogPost['id']); ?>">Edit</a></td>
                            <td><a href="<?php echo BASE_URL; ?>/admin/blog/delete.php?id=<?php echo escp($blogPost['id']); ?>">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php require VIEW_ROOT . '/admin/templates/footer.php';?>