<?php require VIEW_ROOT . '/admin/templates/header.php';?>
<div class="add_page">
    <div class="well">
        <h2>Add Executive</h2>
        <div id="cancel">
            <a href="<?php echo BASE_URL; ?>/admin/executives/list.php">
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

        <form action="<?php echo BASE_URL; ?>/admin/executives/add.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="ePosition">
                Position
                <input type="text" name="ePosition" id="ePosition"/>
            </label>
            <label for="executive_image">
                Photo
                <input class="input-group" type="file" name="executive_image" accept="image/*"/>
            </label>
            <label for="eName">
                Full Name
                <input type="text" name="eName" id="eName"/>
            </label>
            <label for="nName">
                Nickname
                <input type="text" name="nName" id="nName"/>
            </label>
            <label for="dob">
                Date of Birth
                <input type="text" name="dob" id="dob"/>
            </label>
            <label for="sOrigin">
                State of Origin
                <input type="text" name="sOrigin" id="sOrigin"/>
            </label>
            <label for="eLevel">
                Level
                <input type="text" name="eLevel" id="eLevel"/>
            </label>
            <label for="email">
                Email
                <input type="text" name="email" id="email"/>
            </label>
            <label for="pNum">
                Phone Number
                <input type="text" name="pNum" id="pNum"/>
            </label>
            <label for="fColor">
                Favourite Colour
                <input type="text" name="fColor" id="fColor"/>
            </label>
            <label for="fFood">
                Favourite Food
                <input type="text" name="fFood" id="fFood"/>
            </label>
            <label for="fQuote">
                Favourite Quote
                <input type="text" name="fQuote" id="fQuote"/>
            </label>
            <label for="fAmbition">
                Future Ambition
                <input type="text" name="fAmbition" id="fAmbition"/>
            </label>
            <label for="mStatus">
                Marital Status
                <input type="text" name="mStatus" id="mStatus"/>
            </label>
            <label for="hobby">
                Hobbies
                <input type="text" name="hobby" id="hobby"/>
            </label>
            <label for="likes">
                Likes
                <input type="text" name="likes" id="likes"/>
            </label>
            <label for="bCourse">
                Best Course
                <input type="text" name="bCourse" id="bCourse"/>
            </label>
            <label for="wMoment">
                Worst Moment
                <input type="text" name="wMoment" id="wMoment"/>
            </label>
            <label for="ffClub">
                Favourite Football Club
                <input type="text" name="ffClub" id="ffClub"/>
            </label>
            <input type="submit" name="add" class="btn btn-info" value="Publish"/>
        </form>
    </div>
</div>

<?php require VIEW_ROOT . '/admin/templates/footer.php';?>
