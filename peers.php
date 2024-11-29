<?php
//Database connection
require 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql="CREATE TABLE `u745359346_hrms_wdiaug_24`.`my table` (`emp_id` INT(100) NOT NULL , `Project_Name` VARCHAR(50) NOT NULL , `comments` VARCHAR(200) NOT NULL )";
// $result=mysqli_query($conn,$sql);
// $servername = "srv544.hstgr.io";
// $username = "u745359346_hrms_wdiaug_24";
// $password = "WDI_HRMS_aug_24_calanjiyam#2024";
// $dbname = "u745359346_hrms_wdiaug_24";
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $team = $_POST['team'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
}
// Insert data into the database
$sql = "INSERT INTO `addemployeebtn` (first_name,position,team,email,mobile) Values('$first_name','$position','$team','$email','$mobile')";
if ($conn->query($sql) === TRUE) {
    // echo "Leave application submitted successfully!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Calanjiyam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
        @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

        :root {
            /*darkmode Colors*/
            /* --background-color: #1C202B;
        --background-color1: #2b3035;
        --text-color: #f0f1f6;
        --accent-color: #b595f6; */

            /*white mode colors*/
            --background-color: #f0f1f6;
            --background-color1: white;
            --text-color: #1c202b;
            --accent-color: #0325bd;
        }

        body {
            display: flex;
            font-family: "nunito", sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            color: var(--text-color);
            background-color: var(--background-color);
        }

        /* Change the style of all vertical scrollbars */
        ::-webkit-scrollbar {
            width: 8px;
            /* Set the width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: var(--background-color1);
            /* Set the background color of the scrollbar track */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #555555;
            /* Set the color of the scrollbar thumb */
            border-radius: 4px;
            /* Set the border radius of the scrollbar thumb */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #6d2cef;
            /* Set the color of the scrollbar thumb on hover */
        }



        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-70%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateY(-70%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes wipeIn {
            0% {
                width: 0;
                opacity: 0;
            }

            100% {
                width: 100px;
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes wipebox {
            0% {
                width: 0;
                opacity: 0;
            }

            100% {
                width: 70%;
                opacity: 1;
            }
        }

        /* input {
            display: block;
            width: 50%;
            margin: auto;
            margin-bottom: 20px;
            padding: 10px;
            border: 0px solid transparent;
            border-radius: 10px;
            color: #1c202b;
            background-color: #f0f1f6;
            animation: slideIn 1.5s forwards;
            margin-left: 30px;
        } */

        input::placeholder {
            color: rgb(119, 119, 119);
            /* animation: slideIn 1.5s forwards; */

        }

        input:focus {
            outline: none;
            background-color: #4a84cf;
            color: var(--text-color);
        }

        input:focus::placeholder {
            color: rgb(218, 218, 218);
        }

        input[type="date"] {
            /* Change the border color */
            /* border-color: #1c202b; */
            /* Change the background color */
            /* background-color: var(--background-color); */
            margin-top: 5px;
            font-weight: 600;
            /* Change the text color */
            color: black;
        }

        button {
            /* display: block; */
            display: flex;
            justify-content: space-between;
            min-width: 150px;
            height: 40px;
            margin: auto;
            padding: 5px;
            border: 0px solid transparent;
            border-radius: 9px;
            font-size: 12px;
            font-family: "nunito", sans-serif;
            color: var(--text-color);
            background-color: #4a84cf;
            animation: wipeIn 1s forwards;

        }

        button:hover {
            cursor: pointer;
            background-color: transparent;
            /* color: var(--text-color); */
            /* border: 2px solid #0325bd; */
            color: black;
        }

        h2 {
            font-size: 18px;
            padding: 5px;
            margin: 5px;
        }

        h3,
        h4,
        h5,
        h6 {
            font-size: 16px;
            padding: 5px;
        }

        #loading {
            display: none;
        }

        .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #f0f1f6;
            border-radius: 50%;
            margin: 1px;
            animation: pulse 1.5s infinite;
        }

        .dot:nth-child(2) {
            animation-delay: 0.5s;
        }

        .dot:nth-child(3) {
            animation-delay: 1s;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(0.8);
            }
        }

        #messageBox {
            display: none;
            max-width: 300px;
            max-height: 60px;
            top: 10px;
            right: 10px;
            padding: 5px;
            position: absolute;
            border-radius: 10px;
            background-color: #0325bd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: slideInRight 1s forwards;
        }

        #sidebar {
            display: block;
            width: 80px;
            height: 100%;
            position: fixed;
            background-color: var(--background-color1);
            animation: fadeIn 1s forwards;
        }

        #sidebar_logo {
            display: block;
            width: 60px;
            margin: auto;
            margin-top: 10px;
        }

        #sidenav {
            display: block;
            width: 60px;
            height: 80%;
            margin: auto;
            margin-top: 20px;
        }

        .sidenavbtn {
            display: block;
            width: 40px;
            padding: 5px;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: var(--text-color);
        }

        .sidenavbtn:hover {
            color: var(--text-color);
            background-color: #0325bd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebtnactive {
            color: white;
            background-color: #0325bd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profileside {
            display: block;
            width: 40px;
            padding: 5px;
            margin-left: 10px;
            margin-top: 20px;
            bottom: 100px;
            position: absolute;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: var(--text-color);
        }

        .profileside:hover {
            color: var(--text-color);
            background-color: #0325bd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .powerside {
            display: block;
            width: 40px;
            padding: 5px;
            margin-left: 10px;
            margin-top: 20px;
            bottom: 40px;
            position: absolute;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: red;
            text-shadow: 4px 4px 3px rgba(1, 0, 0, 1);
        }

        .powerside:hover {
            color: var(--text-color);
            background-color: red;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #mainarea {
            display: block;
            width: calc(100% - 100px);
            margin-left: 90px;
        }

        #pagetitle {
            display: block;
            margin-top: 25px;
            padding: 5px;
            padding-right: 10px;
            font-family: "Josefin Sans", sans-serif;
            font-size: 22px;
            font-weight: 500;
            animation: fadeIn 2s forwards;
        }

        #pagetitle span {
            display: inline-block;
            margin-right: 10px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #mobileheader {
            display: none;
        }

        #mobileprofile {
            display: block;
            /* vertical-align: middle; */
            text-decoration: none;
            text-align: middle;
            /* vertical-align: middle; */
        }

        #mobileprofile img {
            display: block;
            width: 50px;
            margin: 10px;
            margin-top: 20px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #mobilelogo {
            display: block;
            width: 100px;
            margin: auto;
            margin-top: 0px;
            /* vertical-align: middle; */
        }

        .mobile_navbtn {
            display: inline-block;
            width: 30px;
            padding: 5px;
            margin: auto;
            margin-top: 20px;
            margin-right: 5px;
            /* float: right; */
            text-decoration: none;
            font-size: 26px;
            color: var(--text-color);
        }

        .mobile_navbtn:hover {
            color: var(--text-color);
            background-color: #0325bd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .mobile_navbtnactive {
            color: white;
            background-color: #0325bd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /*animation slide up*/
        @keyframes slideUp {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        #mobileLightDark {
            background-color: rgb(19, 48, 212);
        }
    </style>
    <style>
        @media (max-width: 767px) {
            #sidebar {
                position:absolute;            }

            #mobileheader {
                display: grid;
                grid-template-columns: 33% 33% 33%;
            }

            #mainarea {
                display: block;
                width: 96%;
                margin: auto;
                margin-top: 5px;
                margin-bottom: 100px;
            }

            #desktopDarkLightSwitch {
                display: none;
            }
        }

        /*Dashboard Styling*/
        #dashboardgrid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 100%;
        }

        #pagetitle {
            display: inline-block;
            width: calc(100% - 50px);
        }

        .dashboardcol {
            display: block;
            width: 96%;
            /* margin: auto; */
        }

        @keyframes wipeboxtdy {
            0% {
                width: 50%;
                opacity: 0;
            }

            100% {
                width: 98%;
                opacity: 1;
            }
        }

        @keyframes slideIntodaydate {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes wipeboxtdyinfo {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media (max-width: 767px) {
            #dashboardgrid {
                display: block;
                grid-template-columns: repeat(1, 100%);
                width: 100%;
                margin: auto;
                padding-bottom: 100px;
            }

            .dashboardcol {
                display: block;
                width: 96%;
                margin: auto;
            }

            #pagetitle {
                display: block;
                width: 100%;
            }

            #pagetitle span {
                display: block;
                width: 100%;
                padding: 5px;
                text-align: center;
            }

        }
    </style>
    <style>
        .employee-container {
            /* background-color: white; */

            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1500px;
            margin: 0 auto;
            color: var(--text-color);
            background-color: var(--background-color1);
        }

        h2 {
            margin-bottom: 20px;
            color: var(--text-color);
            background-color: var(--background-color1);
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .filter {
            display: flex;
            align-items: center;
            justify-content:space-between;
        }
       .filter button{
           margin-left:200px;
           font-size:20px;
           color:var(--text-color);
           background-color:#63C5DA;
           border:2px solid white;
           border-radius:5px;
       }
        .filter select,
        /*.filter input,*/
        /*.filter .search-btn {*/
        /*    justify-content:space-between;*/
        /*    padding: 8px;*/
        /*    border: 1px solid #ccc;*/
        /*    border-radius: 5px;*/
        /*    margin-right: 10px;*/
        /*    color: var(--text-color);*/
        /*    background-color: var(--background-color1);*/
        /*}*/

        .search-btn {
            color: var(--text-color);
            background-color: var(--background-color1);
            cursor: pointer;
        }

        .actions {
            display: block;
            align-items: center;
        }

        #addemployeebtn {
            padding-top:10px;
            padding-left:30px;
        color: var(--text-color);
            background-color: var(--background-color1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            border: 1px solid #ccc;
        }
.empbtn{
    padding-bottom:40px;
    padding-left:45px;
    font-weight:bolder;
}
.empbtn3{
     padding-bottom:40px;
    padding-left:50px;
    font-weight:bolder;
}
    .empbtn2{
        padding-bottom:40px;
    padding-left:20px;
    font-weight:bolder;
    }
    
        #saveEmployeeButton {

            /* padding: 10px 20px; */
            /* display: flex; */
            background-color: red;
            color: black;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 0 auto;
            border: 1px solid #ccc;
            /* background-color: #4a84cf; */
            /* justify-content: center; */
        }

        .view-toggle {
            padding: 10px;
            color: var(--text-color);
            background-color: var(--background-color1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;

        }

        .employee-table {

            width: 100%;
            border-collapse: collapse;

        }

        .employee-table thead {

            background-color: #4a84cf;
        }

        #employeeTableBody th {

            color: var(--text-color);
            background-color: var(--background-color1);
        }

        #currentPage span {
            color: black;
        }

        .employee-table th,
        .employee-table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .employee-table th input {
            cursor: pointer;
            animation: slideIn 1.5s forwards;
        }

        .employee-table td input,
        .employee-table td select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            animation: slideIn 1.5s forwards;
        }

        .employee-table td input[type="date"] {
            padding: 6px;
            background-color: transparent;

        }
    </style>
    <style>
        /* General Styles */
        /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: var(--text-color);
        background-color: var(--background-color1);
    } */

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            /* color: var(--text-color);
        background-color: var(--background-color1); */
            border-radius: 8px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            color:white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;

        }

        th,
        td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4a84cf;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            margin-bottom:40px;
        }

        .pagination button {
            margin: 0 5px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            top: 10;
            width: 100%;
            height: 100%;
            margin-bottom:30px;
            /* color: var(--text-color);
        background-color: var(--background-color1); */
        }

        .modal-content {
            color: var(--text-color);
            /* background-color: var(--background-color1); */
            background-color: var(--background-color1);
            margin: 200px 0px 0px 400px;
            padding: 20px;
            width: 600px;
            height:500px;
            border-radius: 8px;
            position: relative;
            border:2px solid black;

            }

        .close {
            position: absolute;
            top: 0px;
            right: 6px;
            font-size: 24px;
            cursor: pointer;
        }
input{
    
}
.forum{
    display:flex;
    margin-bottom:5px;
    margin-top:10px;
    font-size:20px;
}
.forum label{
    margin-left:40px;
    margin-right:30px;
    font-weight:bolder;
    font-family:sans-serif;
}
.forum .input{
    margin-left:5px;
    margin-right:10px;
    border:2px solid black;
    border-radius:10px;
    width:100%;
}
.forum .label{
    margin-left:40px;
    margin-right:12px;
    font-weight:bolder;
    font-family:sans-serif;
    
}
.forum .label2{
     margin-left:40px;
    margin-right:40px;
    font-weight:bolder;
    font-family:sans-serif;
}
.forum .label5{
     margin-left:40px;
    margin-right:41px;
    font-weight:bolder;
    font-family:sans-serif;
}
.forum .label3{
     margin-left:40px;
    font-weight:bolder;
    font-family:sans-serif;
}
.forum .label4{
     margin-left:40px;
    margin-right:30px;
    font-weight:bolder;
    font-family:sans-serif;
}
.forum #status{
    margin-left:140px;
}
#submit{
    margin-left:280px;
    margin-top:30px;
    margin-right:30px;
    border:2px solid black;
    border-radius:10px;
    font-size:25px;
}
#reset{
    margin-top:30px;
     border:2px solid black;
    border-radius:10px;
     font-size:25px;
}
.form .input:hover{
    background-color:#0056b3;
}
    .forum input{
        margin-left:20px;
    }    /* Responsive Styles */
        @media (max-width: 768px)&&(max-width:640px) {
            table {
                font-size: 5px;
            }

            .modal-content {
                width: 150%;
            }
            .employee-container {
             background-color: white; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 6000px;
            margin: 0 auto;
            color: var(--text-color);
            background-color: var(--background-color1);
        }
         .container {
            max-width: 3200px;
            margin: 20px auto;
            padding: 20px;
            /* color: var(--text-color);
        background-color: var(--background-color1); */
            border-radius: 8px;
        }
        
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>


        function calculateTimeSpent(clockin, clockout) {
            const lastClockin = clockin[clockin.length - 1];
            const lastClockinSeconds = getTimeInSeconds(lastClockin);
            // console.log(lastClockin);
            let total = 0;
            if (clockout.length === 1 && clockout[0] === '') {
                //empty the clockout array
                clockout = [];
            }
            // console.log(clockout.length);
            for (let i = 0; i < clockout.length; i++) {
                const clockinSeconds = getTimeInSeconds(clockin[i]);
                const clockoutSeconds = getTimeInSeconds(clockout[i]);

                if (clockinSeconds <= clockoutSeconds) {
                    total += (clockoutSeconds - clockinSeconds);
                } else {
                    total += (lastClockinSeconds - clockinSeconds) + (clockoutSeconds - getTimeInSeconds(lastClockin));
                }
            }
            if (clockout.length < clockin.length) {
                //get the difference between last clockin and current time
                let currentTime = new Date();
                let currentSeconds = getTimeInSeconds(currentTime.toLocaleTimeString());
                total += (currentSeconds - lastClockinSeconds);
                // console.log("current Time "+currentTime.toLocaleTimeString());
            }

            return total;
        }
        var startClockinterval;
        function startClock(timeSpent) {
            const displayElement = document.getElementById('todayclock');
            const [hours, minutes, seconds] = timeSpent.split(':');
            let totalSeconds = (parseInt(hours, 10) * 3600) + (parseInt(minutes, 10) * 60) + parseInt(seconds, 10);

            startClockinterval = setInterval(() => {
                totalSeconds++;
                const newHours = Math.floor(totalSeconds / 3600);
                const newMinutes = Math.floor((totalSeconds % 3600) / 60);
                const newSeconds = totalSeconds % 60;

                const formattedTime = `${newHours.toString().padStart(2, '0')}:${newMinutes.toString().padStart(2, '0')}:${newSeconds.toString().padStart(2, '0')}`;
                //create a new i element with <i class="bi bi-clock-history"></i>
                const iElement = document.createElement('i');
                iElement.classList.add('bi', 'bi-clock-history');
                displayElement.innerHTML = iElement.outerHTML + ' ' + formattedTime;
            }, 1000);

            return {
                stop: () => clearInterval(startClockinterval)
            };
        }
        function todaystatus(date, token) {
            $.ajax({
                type: "POST",
                url: "../services/user/attendance/todaystatus.php",
                data: {
                    token: token,
                    date: date
                },
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    if (response.message === "not in yet") {
                        //reset the display of #tdyaction_loading
                        document.getElementById("tdyaction_loading").style.display = "none";
                        //enable click and hover for the #todayaction and cursor to reflect the same
                        document.getElementById("todayaction").style.pointerEvents = "auto";
                        //set the innerHTML of #todayaction as Clock In
                        document.getElementById('todayaction').innerHTML = "Clock In";
                        document.getElementById("todayaction").classList.add("todayaction_clockin");
                        document.getElementById("todayaction").style.cursor = "pointer";
                    }
                    else if (response.message === "present") {
                        let clockin = response.clockin;
                        let clockout = response.clockout;
                        if (clockout[clockout.length - 1] === '') {
                            clockout.pop();
                        }
                        console.log(clockin, clockout);
                        let totalDuration = calculateTimeSpent(clockin, clockout);
                        //conver the total duration to hours, minutes and seconds
                        let timespent = `${Math.floor(totalDuration / 3600)}:${Math.floor((totalDuration % 3600) / 60)}:${totalDuration % 60}`;
                        console.log(totalDuration);
                        console.log(timespent);
                        if (clockin.length > clockout.length) {
                            startClock(timespent);
                            //reset the display of #tdyaction_loading
                            document.getElementById("tdyaction_loading").style.display = "none";
                            //enable click and hover for the #todayaction and cursor to reflect the same
                            document.getElementById("todayaction").style.pointerEvents = "auto";
                            document.getElementById("todayaction").innerHTML = "Clock Out";
                            //add class todayaction_clockout to #todayaction
                            document.getElementById("todayaction").classList.add("todayaction_clockout");
                            document.getElementById("todayaction").style.cursor = "pointer";
                        }
                        else {
                            const iElement = document.createElement('i');
                            iElement.classList.add('bi', 'bi-clock-history');
                            document.getElementById('todayclock').innerHTML = iElement.outerHTML + ' ' + timespent;
                            //reset the display of #tdyaction_loading
                            document.getElementById("tdyaction_loading").style.display = "none";
                            //enable click and hover for the #todayaction and cursor to reflect the same
                            document.getElementById("todayaction").style.pointerEvents = "auto";
                            document.getElementById("todayaction").innerHTML = "Clock In";
                            //add class todayaction_clockin to #todayaction
                            document.getElementById("todayaction").classList.add("todayaction_clockin");
                            document.getElementById("todayaction").style.cursor = "pointer";
                        }
                    }
                    else if (response.message === "leaverequested") {
                        if (response.hasOwnProperty('clockin')) {
                            let clockin = response.clockin;
                            let clockout = response.clockout;
                            if (clockout[clockout.length - 1] === '') {
                                clockout.pop();
                            }
                            console.log(clockin, clockout);
                            let totalDuration = calculateTimeSpent(clockin, clockout);
                            //conver the total duration to hours, minutes and seconds
                            let timespent = `${Math.floor(totalDuration / 3600)}:${Math.floor((totalDuration % 3600) / 60)}:${totalDuration % 60}`;
                            console.log(totalDuration);
                            console.log(timespent);
                            if (clockin.length > clockout.length) {
                                startClock(timespent);
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }
                            else {
                                const iElement = document.createElement('i');
                                iElement.classList.add('bi', 'bi-clock-history');
                                document.getElementById('todayclock').innerHTML = iElement.outerHTML + ' ' + timespent;
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }

                        }
                        //enable click and hover for the #todayaction and cursor to reflect the same
                        document.getElementById("todayaction").style.pointerEvents = "auto";
                        //remove the onclick evnet for the #todayaction
                        document.getElementById("todayaction").removeAttribute("onclick");
                        document.getElementById("todayaction").innerHTML = "Leave Requested";
                        //add class todayaction_leave to #todayaction
                        document.getElementById("todayaction").classList.add("todayaction_leave");
                    }
                    else if (response.message === "leaveapproved") {
                        if (response.hasOwnProperty('clockin')) {
                            let clockin = response.clockin;
                            let clockout = response.clockout;
                            if (clockout[clockout.length - 1] === '') {
                                clockout.pop();
                            }
                            console.log(clockin, clockout);
                            let totalDuration = calculateTimeSpent(clockin, clockout);
                            //conver the total duration to hours, minutes and seconds
                            let timespent = `${Math.floor(totalDuration / 3600)}:${Math.floor((totalDuration % 3600) / 60)}:${totalDuration % 60}`;
                            console.log(totalDuration);
                            console.log(timespent);
                            if (clockin.length > clockout.length) {
                                startClock(timespent);
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }
                            else {
                                const iElement = document.createElement('i');
                                iElement.classList.add('bi', 'bi-clock-history');
                                document.getElementById('todayclock').innerHTML = iElement.outerHTML + ' ' + timespent;
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }

                        }
                        document.getElementById("tdyaction_loading").style.display = "none";
                        //enable click and hover for the #todayaction and cursor to reflect the same
                        document.getElementById("todayaction").style.pointerEvents = "auto";
                        //remove the onclick evnet for the #todayaction
                        document.getElementById("todayaction").removeAttribute("onclick");
                        document.getElementById("todayaction").innerHTML = "Leave Approved";
                        //add class todayaction_leave to #todayaction
                        document.getElementById("todayaction").classList.add("todayaction_leave");
                    }
                    else if (response.message === "holiday") {
                        if (response.hasOwnProperty('clockin')) {
                            let clockin = response.clockin;
                            let clockout = response.clockout;
                            if (clockout[clockout.length - 1] === '') {
                                clockout.pop();
                            }
                            console.log(clockin, clockout);
                            let totalDuration = calculateTimeSpent(clockin, clockout);
                            //conver the total duration to hours, minutes and seconds
                            let timespent = `${Math.floor(totalDuration / 3600)}:${Math.floor((totalDuration % 3600) / 60)}:${totalDuration % 60}`;
                            console.log(totalDuration);
                            console.log(timespent);
                            if (clockin.length > clockout.length) {
                                startClock(timespent);
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }
                            else {
                                const iElement = document.createElement('i');
                                iElement.classList.add('bi', 'bi-clock-history');
                                document.getElementById('todayclock').innerHTML = iElement.outerHTML + ' ' + timespent;
                                //reset the display of #tdyaction_loading
                                document.getElementById("tdyaction_loading").style.display = "none";
                            }

                        }
                        //enable click and hover for the #todayaction and cursor to reflect the same
                        document.getElementById("todayaction").style.pointerEvents = "auto";
                        //remove the onclick evnet for the #todayaction
                        document.getElementById("todayaction").removeAttribute("onclick");
                        document.getElementById("todayaction").innerHTML = "Holiday!";
                        //add class todayaction_leave to #todayaction
                        document.getElementById("todayaction").classList.add("todayaction_leave");
                    }
                    else if (response.message === "workfromhome") {
                        //reset the display of #tdyaction_loading
                        document.getElementById("tdyaction_loading").style.display = "none";
                        //enable click and hover for the #todayaction and cursor to reflect the same
                        document.getElementById("todayaction").style.pointerEvents = "auto";
                        //set the innerHTML of #todayaction as Clock In
                        document.getElementById('todayaction').innerHTML = "Clock In";
                        document.getElementById("todayaction").classList.add("todayaction_clockin");
                        document.getElementById("todayaction").style.cursor = "pointer";
                        //set the #location as Work from Home
                        let location_icon = document.createElement('i');
                        // <i class="bi bi-geo-alt-fill"></i> 
                        location_icon.classList.add('bi', 'bi-geo-alt-fill');
                        document.getElementById("location").innerHTML = location_icon.outerHTML + ' WFH';
                    }
                    if (response.location === "workfromhome") {
                        //set the #location as Work from Home
                        let location_icon = document.createElement('i');
                        // <i class="bi bi-geo-alt-fill"></i> 
                        location_icon.classList.add('bi', 'bi-geo-alt-fill');
                        document.getElementById("location").innerHTML = location_icon.outerHTML + ' WFH';
                    }
                },
                error: function (xhr, status, error) {
                    let response = JSON.parse(xhr.responseText);
                    console.log(response);
                    console.log(status);
                }
            })
        }

        function todayteammembers(date, token) {
            $.ajax({
                type: "POST",
                url: "../services/user/team/teamtoday.php",
                data: {
                    token: token,
                    date: date
                },
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    if (response.message === "success") {
                        let teammembers_details = response.teammembers;
                        let total_teammembers = teammembers_details.length;
                        console.log(teammembers_details);
                        console.log(total_teammembers);
                        let total_teammembers_not_in_list = 0;
                        let notin = [];
                        let total_teammembers_on_leave_list = 0;
                        let onleave = [];
                        let total_teammembers_present_list = 0;
                        let present = [];
                        //loop through all the teammembers and gather their status use j as the counter
                        for (let j = 0; j < total_teammembers; j++) {
                            let status = teammembers_details[j].status;
                            if (status === "leaveapproved") {
                                //increment the total_teammembers_on_leave_list
                                total_teammembers_on_leave_list++;
                                onleave.push(teammembers_details[j]);
                            }
                            else if (status === "present") {
                                //increment the total_teammembers_present_list
                                total_teammembers_present_list++;
                                present.push(teammembers_details[j]);
                            }
                            else {
                                total_teammembers_not_in_list++;
                                notin.push(teammembers_details[j]);
                            }
                        }
                        if (total_teammembers_not_in_list > 0) {
                            document.getElementById("PeersNotInList").innerHTML = '';
                        }
                        //For the not_in_today list build the image tag for each teammember with the format <img class="SmallProfilePic" src="../Karan Dharmalingam Potrait Photo.png">
                        let i;
                        for (i = 0; i < total_teammembers_not_in_list && i < 5; i++) {
                            let image = document.createElement('img');
                            image.classList.add('SmallProfilePic');
                            let peer_img = notin[i].img;
                            console.log(peer_img);
                            if (peer_img === '' || peer_img == 'NA') {
                                let peer_name = notin[i].name;
                                //to upper case of the name
                                peer_name = peer_name.toUpperCase();
                                //split the name with delimerter ' '
                                let peer_name_array = peer_name.split(' ');
                                if (peer_name_array.length > 1) {
                                    let first_name = peer_name_array[0];
                                    let last_name = peer_name_array[1];
                                    image = document.createElement('p');
                                    image.classList.add('SmallProfileTxt');
                                    image.innerHTML = first_name.charAt(0) + last_name.charAt(0);
                                }
                                else {
                                    let first_name = peer_name_array[0];
                                    image = document.createElement('p');
                                    image.classList.add('SmallProfileTxt');
                                    image.innerHTML = first_name.charAt(0) + first_name.charAt(1);
                                }
                            }
                            else {
                                image.src = peer_img;
                            }
                            document.getElementById("PeersNotInList").appendChild(image);
                        }
                        if (i < total_teammembers_not_in_list) {
                            let image = document.createElement('img');
                            image = document.createElement('p');
                            image.classList.add('SmallProfileTxt');
                            let rest = total_teammembers_not_in_list - 5;
                            image.innerHTML = '+' + rest;
                            document.getElementById("PeersNotInList").appendChild(image);
                        }

                        if (total_teammembers_on_leave_list > 0) {
                            document.getElementById("PeersOnLeaveList").innerHTML = '';
                        }
                        console.log(onleave);
                        console.log(notin);
                        console.log(present);
                        //For the on_leave list build the image tag for each teammember with the format <img class="SmallProfilePic" src="../Karan Dharmalingam Potrait Photo.png">
                        for (i = 0; i < total_teammembers_on_leave_list && i < 5; i++) {
                            let image = document.createElement('img');
                            image.classList.add('SmallProfilePic');
                            let peer_img = onleave[i].img;
                            console.log(peer_img);
                            if (peer_img === '' || peer_img == 'NA') {
                                let peer_name = onleave[i].name;
                                //to upper case of the name
                                peer_name = peer_name.toUpperCase();
                                //split the name with delimerter ' '
                                let peer_name_array = peer_name.split(' ');
                                if (peer_name_array.length > 1) {
                                    let first_name = peer_name_array[0];
                                    let last_name = peer_name_array[1];
                                    image = document.createElement('p');
                                    image.classList.add('SmallProfileTxt');
                                    image.innerHTML = first_name.charAt(0) + last_name.charAt(0);
                                }
                                else {
                                    let first_name = peer_name_array[0];
                                    image = document.createElement('p');
                                    image.classList.add('SmallProfileTxt');
                                    image.innerHTML = first_name.charAt(0) + first_name.charAt(1);
                                }
                            }
                            else {
                                image.src = peer_img;
                            }
                            document.getElementById("PeersOnLeaveList").appendChild(image);
                        }
                        if (i < total_teammembers_on_leave_list) {
                            let image = document.createElement('img');
                            image = document.createElement('p');
                            image.classList.add('SmallProfileTxt');
                            let rest = total_teammembers_on_leave_list - 5;
                            image.innerHTML = '+' + rest;
                            document.getElementById("PeersOnLeaveList").appendChild(image);
                        }
                    }
                },
                error: function (xhr, status, error) {
                    let response = JSON.parse(xhr.responseText);
                    console.log(response);
                    console.log(status);
                }
            })
        }

        /*personal attendance summary and leave application*/
        function attendanceSummary() {
            let token = getCookie('token');
            $.ajax({
                type: "POST",
                url: "../services/user/attendance/leavesummary.php",
                data: {
                    token: token
                },
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    if (response.message === "success") {
                        let leavethisyear = response.leavethisyear;
                        let leavethismonth = response.leavethismonth;
                        //add the data to #LeavesTakenThisMonth and #LeavesTakenThisYear
                        document.getElementById("LeavesTakenThisMonth").innerHTML = leavethismonth;
                        document.getElementById("LeavesTakenThisYear").innerHTML = leavethisyear;
                    }
                }
            })
            $.ajax({
                type: "POST",
                url: "../services/user/attendance/attendancesummary.php",
                data: {
                    token: token
                },
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    if (response.message === "success") {
                        let avghoursperday = response.avghoursperday;
                        let attendancepercentage = response.attendancepercentage;
                        //add the data to #AvgHoursPerDay and #AttendancePercentage
                        document.getElementById("AvgHoursPerDay").innerHTML = avghoursperday;
                        document.getElementById("AttendancePercentage").innerHTML = attendancepercentage + "%";
                    }
                }
            })
        }

        /*holidays summary*/
        function holidaysSummary() {
            let token = getCookie('token');
            $.ajax({
                type: "POST",
                url: "../services/user/attendance/holidaysummary.php",
                data: {
                    token: token
                },
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    let holidays = response.holidays;
                    if (holidays.length > 0) {
                        for (let i = 0; i < holidays.length; i++) {
                            let holidayscarousel = document.getElementById("holidayscarousel");
                            let holiday = document.createElement('div');
                            holiday.classList.add('carousel-item');
                            if (i == 0) {
                                holiday.classList.add('active');
                            }
                            const holidayImage = document.createElement('img');
                            let holidayimgsrc = '../holidayposters/' + holidays[i].coverImage;
                            holidayImage.setAttribute('src', holidayimgsrc);
                            holiday.appendChild(holidayImage);
                            holidayImage.classList.add('holidayImage');
                            holidayscarousel.appendChild(holiday);
                        }
                    }
                }
            })
        }

        //on window load check if the user is logged in by checking if the sessionStorage has token
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1, c.length);
                }
                if (c.indexOf(nameEQ) === 0) {
                    return c.substring(nameEQ.length, c.length);
                }
            }
            return null;
        }

        function deleteCookie(name) {
            document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

       
    </script>

</head>

<body>
    <div id="messageBox"></div>
    <span id="loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </span>
    <div id="sidebar">
        <img src="../DarkLogo.png" alt="" id="sidebar_logo" />
        <div id="sidenav">
            <a href="../dashboard" class="sidenavbtn"><i class="bi bi-house-fill"></i></a>
            <a href="../attendance" class="sidenavbtn "><i class="bi bi-calendar2-week-fill"></i></a>
            <a href="../peers/peers.php" class="sidenavbtn sidebtnactive"><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php" class="sidenavbtn"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formmain.php" class="sidenavbtn "><i class="bi bi-ui-radios"></i></a>
            <a href="../profile" class="profileside"><i class="bi bi-person-fill"></i></a>
            <a href="../logout.php" class="powerside"><i class="bi bi-power"></i></a>
        </div>
    </div>
    <div id="mainarea">
        <div id="mobileheader">
            <a id="mobileprofile"><img src="/" alt="" /></a>
            <img src="../DarkLogo.png" alt="" id="mobilelogo" />
            <div id="mobile_topnav">
                <a href="../logout.php" style="color: red" class="mobile_navbtn"><i class="bi bi-power"></i></a>
                <span id="mobileLightDark" onclick="toggleTheme()" class="mobile_navbtn"><i
                        class="bi bi-brightness-high-fill"></i></span>
            </div>
        </div>
        <h1 id="pagetitle">
            <span id="greetingtxt">Employee </span><span id="username"></span>
        </h1>
        <span id="desktopDarkLightSwitch" style="cursor: pointer" onclick="toggleTheme()"><i
                class="bi bi-moon-fill"></i></span>
        <script>
            function getCookie1(name) {
                const cookieValue = `; ${document.cookie}`;
                const cookieParts = cookieValue.split(`; ${name}=`);
                if (cookieParts.length === 2) {
                    return cookieParts.pop().split(";").shift();
                }
                return null;
            }

            // Retrieve the theme from the cookie
            const themeCookie = getCookie1("theme");
            console.log(themeCookie);
            if (themeCookie) {
                // If the theme cookie exists, set the theme accordingly
                const theme = themeCookie;
                if (theme === "light") {
                    console.log(theme);
                    document.documentElement.setAttribute("data-theme", "light");
                    document.getElementById("desktopDarkLightSwitch").innerHTML =
                        '<i class="bi bi-sun-fill"></i>';
                    document.getElementById("mobileLightDark").innerHTML =
                        '<i class="bi bi-sun-fill"></i>';
                    document.documentElement.setAttribute("data-theme", "light");
                    setCookie("theme", "light", 365);
                    document.documentElement.style.setProperty(
                        "--background-color1",
                        "white"
                    );
                    document.documentElement.style.setProperty(
                        "--background-color",
                        "#f0f1f6"
                    );
                    document.documentElement.style.setProperty(
                        "--text-color",
                        "#1C202B"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#0325bd"
                    );
                    //change the soruce of #sidebar_logo #mobilelogo
                    document.getElementById("sidebar_logo").src = "../DarkLogo.png";
                    document.getElementById("mobilelogo").src = "../DarkLogo.png";
                } else {
                    document.documentElement.setAttribute("data-theme", "dark");
                    document.getElementById("desktopDarkLightSwitch").innerHTML =
                        '<i class="bi bi-moon-fill"></i>';
                    document.getElementById("mobileLightDark").innerHTML =
                        '<i class="bi bi-moon-fill"></i>';
                    document.documentElement.setAttribute("data-theme", "dark");
                    setCookie("theme", "dark", 365);
                    document.documentElement.style.setProperty(
                        "--background-color",
                        "#1C202B"
                    );
                    document.documentElement.style.setProperty(
                        "--background-color1",
                        "#2b3035"
                    );
                    document.documentElement.style.setProperty(
                        "--text-color",
                        "#f0f1f6"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#6d2cef"
                    );
                    //change the soruce of #sidebar_logo #mobilelogo
                    document.getElementById("sidebar_logo").src = "../WhiteLogo.png";
                    document.getElementById("mobilelogo").src = "../WhiteLogo.png";
                }
            } else {
                // If the theme cookie does not exist, set a default theme
                document.documentElement.setAttribute("data-theme", "light");
                setCookie("theme", "light", 365);
            }

            function toggleTheme() {
                const currentTheme =
                    document.documentElement.getAttribute("data-theme");
                if (currentTheme === "dark") {
                    document.getElementById("desktopDarkLightSwitch").innerHTML =
                        '<i class="bi bi-sun-fill"></i>';
                    document.getElementById("mobileLightDark").innerHTML =
                        '<i class="bi bi-sun-fill"></i>';
                    document.documentElement.setAttribute("data-theme", "light");
                    setCookie("theme", "light", 365);
                    document.documentElement.style.setProperty(
                        "--background-color",
                        "#f0f1f6"
                    );
                    document.documentElement.style.setProperty(
                        "--background-color1",
                        "white"
                    );
                    document.documentElement.style.setProperty(
                        "--text-color",
                        "#1C202B"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#0325bd"
                    );
                    /*--background-color: #f0f1f6;
                    --background-color1: white;
                    --text-color: #1C202B;
                    --accent-color: #0325bd;*/
                    //change the soruce of #sidebar_logo #mobilelogo
                    document.getElementById("sidebar_logo").src = "../DarkLogo.png";
                    document.getElementById("mobilelogo").src = "../DarkLogo.png";
                } else {
                    document.getElementById("desktopDarkLightSwitch").innerHTML =
                        '<i class="bi bi-moon-fill"></i>';
                    document.getElementById("mobileLightDark").innerHTML =
                        '<i class="bi bi-moon-fill"></i>';
                    document.documentElement.setAttribute("data-theme", "dark");
                    setCookie("theme", "dark", 365);
                    document.documentElement.style.setProperty(
                        "--background-color",
                        "#1C202B"
                    );
                    document.documentElement.style.setProperty(
                        "--background-color1",
                        "#2b3035"
                    );
                    document.documentElement.style.setProperty(
                        "--text-color",
                        "#f0f1f6"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#6d2cef"
                    );
                    /*--background-color: #1C202B;
                      --background-color1: #2b3035;
                      --text-color: #f0f1f6;
                      --accent-color: #b595f6;*/
                    document.getElementById("sidebar_logo").src = "../WhiteLogo.png";
                    document.getElementById("mobilelogo").src = "../WhiteLogo.png";
                }
            }
        </script>
        <div class="employee-container">
            <!-- <h2>Employees</h2> -->
            <div class="toolbar">
                <div class="filter">
                    <button id="engineering"class="empbtn2">Engineering</button>
                     <button id="HR"class="empbtn3">HR</button>
                        <button id="departments"class="empbtn">Sales</button>
                    <!--<select>-->
                    <!--    <option value="">All categories</option>-->
                    <!--    <option value="HR">HR</option>-->
                    <!--    <option  id="engineering" value="Engineering">Engineering</option>-->
                    <!--    <option value="Sales">Sales</option>-->
                    <!--</select>-->
                </div>
                <div class="actions">
                    <button id="addemployeebtn">+ Add employee</button>
                </div>
                <div id="employeeModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form id="employeeForm">
                            <div class="forum">
                            <label for="name">Name:</label>
                            <input class="input"type="text" id="name" name="first_name" required>
                             <input class="input" type="text" id="name" name="first_name" required>
                              </div>
                              <div class="forum">
                            <label class="label" for="position">Position:</label>
                            <input class="input" type="text" id="position" name="position" required>
                            </div>
                        <div class="forum">
                            <label class="label2" for="team">Team:</label>
                            <input class="input" type="text" id="team" name="team" required>
                          </div>
                         <div class="forum">
                            <label class="label5"for="email">Email:</label>
                            <input class="input" type="email" id="email" name="email" required>
</div>
 <div class="forum">
                            <label class="label4"for="mobile">Mobile:</label>
                            <input class="input" type="text" id="mobile" name="mobile" required>
                          </div>
                             <div class="forum">
                            <label class="label"for="address">Address:</label>
                            <input class="input" type="text" id="address" name="address" required>
</div>
 <div class="forum">
                            <label for="status">Status:</label>
                            <select id="status" name="status">
                                <option value="full-time">Full-time</option>
                                <option value="part-time">Part-time</option>
                            </select>
                              </div>
                            <input name="submit" id="submit" type="submit">
                            <input  id="reset" type="reset">

                        </form>
                    </div>
                </div>


            </div>
            <table id="employee-table" class="employee-table">
            </table>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#engineering').click(function(event){
                event.preventDefault();
                $.ajax({
                    url:"data.php",
                    datatype:"html",
                    success:function(Result){
                        $('#employee-table').html(Result)
                    }
                })
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#HR').click(function(event){
                event.preventDefault();
                $.ajax({
                    url:"data2.php",
                    datatype:"html",
                    success:function(Result){
                        $('#employee-table').html(Result)
                    }
                })
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#departments').click(function(event){
                event.preventDefault();
                $.ajax({
                    url:"data3.php",
                    datatype:"html",
                    success:function(Result){
                        $('#employee-table').html(Result)
                    }
                })
            })
        })
    </script>
    
    <script>
        const modal = document.getElementById("employeeModal");
        const addemployeebtn = document.getElementById("addemployeebtn");
        const closeModal = document.getElementsByClassName("close")[0];

        // Reset button handling
        function resetbtn() {
            document.getElementById("employeeForm").reset();
        }
        addemployeebtn.onclick = function () {
            modal.style.display = "block";
        }

        closeModal.onclick = function () {
            modal.style.display = "none";
        }

        // Function to Update the Table Data
        function updateTable() {
            // This function will send a request to the server and update the table
            fetch(`/api/employees?page=${currentPage}`)
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('employeeTableBody');
                    tableBody.innerHTML = ''; // Clear table before populating

                    data.employees.forEach(employee => {
                        const row = `<tr>
                    <td>${employee.name}</td>
                    <td>${employee.position}</td>
                    <td>${employee.team}</td>
                    <td>${employee.bday}</td>
                    <td>${employee.email}</td>
                    <td>${employee.address}</td>
                    <td>${employee.status}</td>
                </tr>`;
                        tableBody.innerHTML += row;
                    });
                });
        }

        // Form Submission (AJAX)
        document.getElementById('employeeForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(this);
            fetch('/api/employee', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    modal.style.display = "none";
                    updateTable();
                })
                .catch(error => console.error('Error:', error));
        });

    </script>
</body>

</html>
