<div class="pageSection">
    <div class="headerContainer">
        <div class="headerProfileContainer">
            <img src="assets/svg/john_logo.svg" alt="John Logo" class="headerLogo" onmouseenter="profileIn()">
            <div class="headerProfilePictureSection" onmouseleave="profileOut()">
                <div class="headerProfilePictureContainer">
                    <img class="headerProfilePicture" src="assets/images/cover-john.png" alt="<?php echo $myFullName['FirstName']; ?>'s Face">
                </div>
            </div>
        </div>
        <div class="headerNameContainer">
            <p class="headerNameFullName"><?php echo $myFullName['FirstName']." ".$myFullName['MiddleName']." ".$myFullName['LastName']; ?></p>
            <p class="headerNameSubtitle"><?php echo $myFullName['FirstName']; ?>'s Website Biography</p>
        </div>
    </div>
</div>
<div class="headerMobileProfileContainer">
    <div class="headerMobileProfilePictureSection">
        <div class="headerMobileProfilePictureContainer">
            <img class="headerMobileProfilePicture" src="assets/images/cover-john.png" alt="<?php echo $myFullName['FirstName']; ?>'s Face">
        </div>
    </div>
    <p class="headerMobileNameFullName"><?php echo $myFullName['FirstName']." ".$myFullName['MiddleName']." ".$myFullName['LastName']; ?></p>
    <p class="headerMobileNameSubtitle">If you're not a good shot today, don't worry there are other ways to be useful.<br>-Sova</p>
</div>