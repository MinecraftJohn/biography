<?php include("variables.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biography (John M. Napoles)</title>
        <link rel="shortcut icon" href="assets/svg/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/script.js" defer></script>
        <meta name="theme-color" content="#1c202e"/>
    </head>
    <body>
        <div class="bodySection">
            <?php include("header.php") ?>
            <div class="pageSection">
                <div class="infoContainer">
                    <div class="infoDividerContainer infoDividerContainerLeft">
                        <p class="infoAboutMeTitle">Biography</p>
                        <p class="infoAboutMeText">
                            <?php echo $myFullName['FirstName']." is one of the student in CITE. He was born in ".$myDateOfBirth['Year']
                            ." in ".$myAddress['Province'].". He is one of a contributor on a Minecraft Java community's plugin 
                            development by reporting issues and suggesting new features."; ?> 
                            <br><br>
                            <?php echo "With his creation of Pinoy LifeCraft a Minecraft server, ".$myFullName['FirstName'].
                            " made the player's childhood fun and memorable. At the age of 13, ".$myFullName['FirstName'].
                            " started playing Minecraft and that's where he started to learn the managing a Minecraft server. 
                            Until then, ".$myFullName['FirstName']." inpired by coding and he started creating his first 
                            website for the server at the age of 16 using a website builder. With self-taught his dream server website was built last 2020."; ?>
                            <br><br>
                            His natural curiosity led him to the programming world. 
                            He graduated Diploma in Engineering Technology Computer Engineering and already built some projects.
                        </p>
                    </div>
                    <div class="infoDividerContainer infoDividerContainerRight">
                        <div class="infoBoxContainer infoBoxContainerTop">
                            <img src="assets/svg/calendar.svg" alt="Calendar">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Date of birth</p>
                                <p class="infoBoxTextInfo"><?php echo $myDateOfBirth['Month']." ".$myDateOfBirth['Day'].", ".$myDateOfBirth['Year']; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/svg/gender.svg" alt="Gender">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Gender</p>
                                <p class="infoBoxTextInfo"><?php echo $myGender; ?></php>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/svg/citizenship.svg" alt="Citizenship">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Citizenship</p>
                                <p class="infoBoxTextInfo"><?php echo $myCitizenship; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/svg/address.svg" alt="Address">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Address</p>
                                <p class="infoBoxTextInfo">
                                    <?php echo 
                                                $myAddress['Street'].
                                                " ".
                                                $myAddress['Barangay'].
                                                " ".
                                                $myAddress['City'].
                                                " City, ".
                                                $myAddress['Province'].
                                                " ".
                                                $myAddress['ZIP Code']
                                    ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/svg/email.svg" alt="Email">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Email</p>
                                <p class="infoBoxTextInfo"><?php echo $myEmail; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/svg/phone.svg" alt="Phone">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Mobile Number</p>
                                <p class="infoBoxTextInfo"><?php echo $myMobileNumber; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("footer.php") ?>
        </div>
    </body>
</html>