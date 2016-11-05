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
                <li><a href="../sliders/list.php">Slider</a></li>
                <li><a href="../welcome/list.php">Welcome Message</a></li>
                <li><a href="../events/list.php">Events</a></li>
                <li class="active"><a href="list.php">Executives</a></li>
                <li><a href="../gallery/list.php">Gallery</a></li>
                <li><a href="../blog/list.php">Blog</a></li>
                <li><a href="../ads/list.php">Ads</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <h2>Admin</h2>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="../sliders/list.php">Slider</a></li>
                <li><a href="../welcome/list.php">Welcome Message</a></li>
                <li><a href="../events/list.php">Events</a></li>
                <li class="active"><a href="list.php">Executives</a></li>
                <li><a href="../gallery/list.php">Gallery</a></li>
                <li><a href="../blog/list.php">Blog</a></li>
                <li><a href="../ads/list.php">Ads</a></li>
            </ul><br>
        </div>
        <br>

        <div class="col-sm-9">
            <div class="well">
                <h4>Executives Profile</h4>
                <div id="add">
                    <a href="<?php echo BASE_URL; ?>/admin/executives/add.php">
                        <div class="add">
                            <p>Add Executives</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="well">
                <?php if (empty($executives)): ?>
                    <p>Empty, add executives</p>
                <?php else: ?>
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($executives as $executive): ?>
                        <tr>
                            <td><?php echo escp($executive['eName']); ?></td>
                            <td><?php echo escp($executive['ePosition']);?></td>
                            <td class="edit"><a href="<?php echo BASE_URL; ?>/admin/executives/edit.php?id=<?php echo escp($executive['id']); ?>">Edit</a></td>
                            <td><a href="<?php echo BASE_URL; ?>/admin/executives/delete.php?id=<?php echo escp($executive['id']); ?>">Delete</a></td>
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