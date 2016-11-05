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
                    <li class="active"><a href="<?php echo BASE_URL; ?>/admin/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Admin</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="<?php echo BASE_URL; ?>/admin/login.php">Login</a></li>
                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well">
                    <h4>Welcome Admin, Please Login</h4>
                    
                </div>
                <div class="well">
                    <div class="loginForm">
                        <div class="col-sm-6">
                            <form class="form-horizontal" role="form" action="<?php echo BASE_URL; ?>/admin/checkLogin.php" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="uname">Username:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name= "uname" id="uname" placeholder="Enter username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require VIEW_ROOT . '/admin/templates/footer.php';?>