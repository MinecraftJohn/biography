<?php
    $connect = mysqli_connect("localhost", "root", "", "biography");
    $queryData = mysqli_query($connect, "SELECT * FROM user WHERE id=1");
    $getData = mysqli_fetch_assoc($queryData);

    $myFullName = array(
        "FirstName"=>$getData['fname'],
        "MiddleName"=>$getData['mname'],
        "MiddleInitial"=>$getData['mname'][0],
        "LastName"=>$getData['lname'],
        "Alias"=>$getData['nick']
    );
    switch ($getData['birthmonth']) {
        case 1:
            $getData['birthmonth'] = "January";
            break;
        case 2:
            $getData['birthmonth'] = "February";
            break;
        case 3:
            $getData['birthmonth'] = "March";
            break;
        case 4:
            $getData['birthmonth'] = "April";
            break;
        case 5:
            $getData['birthmonth'] = "May";
            break;
        case 6:
            $getData['birthmonth'] = "June";
            break;
        case 7:
            $getData['birthmonth'] = "July";
            break;
        case 8:
            $getData['birthmonth'] = "August";
            break;
        case 9:
            $getData['birthmonth'] = "September";
            break;
        case 10:
            $getData['birthmonth'] = "October";
            break;
        case 11:
            $getData['birthmonth'] = "November";
            break;
        case 12:
            $getData['birthmonth'] = "December";
            break;
        
        default:
            $getData['birthmonth'] = "Invalid Month";
            break;
    }
    $myDateOfBirth = array(
        "Month"=>$getData['birthmonth'],
        "Day"=>$getData['birthday'],
        "Year"=>$getData['birthyear']
    );
    switch ($getData['gender']) {
        case 0:
            $getData['gender'] = "Female";
            break;
        case 1:
            $getData['gender'] = "Male";
            break;
        
        default:
            $getData['gender'] = "Others";
            break;
    }
    $myGender = $getData['gender'];
    $myCitizenship = $getData['citizenship'];
    $myAddress = array(
        "Street"=>$getData['adressstreet'],
        "Barangay"=>$getData['adressbarangay'],
        "City"=>$getData['adresscity'],
        "Province"=>$getData['adressprovince'],
        "ZIP Code"=>$getData['adresszipcode']
    );
    $myEmail = $getData['email'];
    $myMobileNumber = $getData['number'];
?>