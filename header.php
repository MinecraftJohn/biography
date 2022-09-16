<div class="pageSection">
    <div class="headerContainer">
        <div class="headerProfileContainer">
            <svg width="322" height="70" viewBox="0 0 460 100" class="headerLogo" onmouseenter="profileIn()">
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd" 
                        d="M100 0H20V20H80V80H20V60H0V80H20V100H80V80H100V20V0ZM200 0H140V20H120V80H140V100H200V80H220V20H200V0ZM200 20V80H140V20H200ZM260 0H240V100H260V60H320V100H340V0H320V40H260V0ZM360 0H380V20H400V40H380V100H360V0ZM420 60H400V40H420V60ZM420 60H440V0H460V100H440V80H420V60Z" 
                        fill="url(#logoGradient)" filter="url(#logoShadow)"/>
                </g>
                <defs>
                    <linearGradient id="logoGradient" x1="100" y1="0" x2="0" y2="100" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0075c3"/>
                        <stop offset="1" stop-color="#00abe9"/>
                    </linearGradient>
                    <filter id="logoShadow" x="0" y="0" width="200" height="200" > 
                        <feOffset result="offOut" in="SourceAlpha" dx="4" dy="4" /> 
                        <feColorMatrix result="matrixOut" in="offOut" type="matrix" values=" 1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 0.5 0" /> 
                        <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="5" /> 
                        <feBlend in="SourceGraphic" in2="blurOut" mode="normal" /> 
                    </filter>
                </defs>
            </svg>
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