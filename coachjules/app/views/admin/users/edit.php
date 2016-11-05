<?php require VIEW_ROOT . '/admin/templates/header.php';?>
<div class="add_page">
    <div class="well">
        <h2>Edit Executive profile</h2>
        <div id="cancel">
            <a href="<?php echo BASE_URL; ?>/admin/executives/list.php">
                <div class="cancel">
                    <p>Cancel</p>
                </div>
            </a>
        </div>
        <div class="img_edit">
            <img class="thumbnail img-responsive" src="<?php echo BASE_URL .'/'. $executive['path']; ?>">
        </div>
        <form action="<?php echo BASE_URL; ?>/admin/executives/edit.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="ePosition">
                    Position
                    <input type="text" name="ePosition" id="ePosition" value="<?php echo escp($executive['ePosition']); ?>"/>
                </label>
                <label for="eName">
                    Full Name
                    <input type="text" name="eName" id="eName" value="<?php echo escp($executive['eName']); ?>"/>
                </label>
                <label for="nName">
                    Nickname
                    <input type="text" name="nName" id="nName" value="<?php echo escp($executive['nName']); ?>"/>
                </label>
                <label for="dob">
                    Date of Birth
                    <input type="text" name="dob" id="dob" value="<?php echo escp($executive['dob']); ?>"/>
                </label>
                <label for="sOrigin">
                    State of Origin
                    <input type="text" name="sOrigin" id="sOrigin" value="<?php echo escp($executive['sOrigin']); ?>"/>
                </label>
                <label for="eLevel">
                    Level
                    <input type="text" name="eLevel" id="eLevel" value="<?php echo escp($executive['eLevel']); ?>"/>
                </label>
                <label for="email">
                    Email
                    <input type="text" name="email" id="email" value="<?php echo escp($executive['email']); ?>"/>
                </label>
                <label for="pNum">
                    Phone Number
                    <input type="text" name="pNum" id="pNum" value="<?php echo escp($executive['pNum']); ?>"/>
                </label>
                <label for="fColor">
                    Favourite Colour
                    <input type="text" name="fColor" id="fColor" value="<?php echo escp($executive['fColor']); ?>"/>
                </label>
                <label for="fFood">
                    Favourite Food
                    <input type="text" name="fFood" id="fFood" value="<?php echo escp($executive['fFood']); ?>"/>
                </label>
                <label for="fQuote">
                    Favourite Quote
                    <input type="text" name="fQuote" id="fQuote" value="<?php echo escp($executive['fQuote']); ?>"/>
                </label>
                <label for="fAmbition">
                    Future Ambition
                    <input type="text" name="fAmbition" id="fAmbition" value="<?php echo escp($executive['fAmbition']); ?>"/>
                </label>
                <label for="mStatus">
                    Marital Status
                    <input type="text" name="mStatus" id="mStatus" value="<?php echo escp($executive['mStatus']); ?>"/>
                </label>
                <label for="hobby">
                    Hobbies
                    <input type="text" name="hobby" id="hobby" value="<?php echo escp($executive['hobby']); ?>"/>
                </label>
                <label for="likes">
                    Likes
                    <input type="text" name="likes" id="likes" value="<?php echo escp($executive['likes']); ?>"/>
                </label>
                <label for="bCourse">
                    Best Course
                    <input type="text" name="bCourse" id="bCourse" value="<?php echo escp($executive['bCourse']); ?>"/>
                </label>
                <label for="wMoment">
                    Worst Moment
                    <input type="text" name="wMoment" id="wMoment" value="<?php echo escp($executive['wMoment']); ?>"/>
                </label>
                <label for="ffClub">
                    Favourite Football Club
                    <input type="text" name="ffClub" id="ffClub" value="<?php echo escp($executive['ffClub']); ?>"/>
                </label>
            <input type="hidden" name="id" value="<?php echo $executive['id']; ?>"/>
            <input type="submit" name="update" class="btn btn-info" value="Update"/>
        </form>
    </div>
</div>

<?php require VIEW_ROOT . '/admin/templates/footer.php';?>
