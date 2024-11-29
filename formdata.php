//tranferform.php

<?php
// Database connection
require 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql="CREATE TABLE `u745359346_hrms_wdiaug_24`.`my table` (`emp_id` INT(100) NOT NULL , `Project_Name` VARCHAR(50) NOT NULL , `comments` VARCHAR(200) NOT NULL )";
// $result=mysqli_query($conn,$sql);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emp_id=$_POST['Emp_id'];
    $Project_Name=$_POST['Project_Name'];
    $Manager=$_POST['Manager'];
    $comments=$_POST['comments'];
}
// Insert data into the database
$sql = "INSERT INTO `transfer` (Emp_id,Project_Name,Manager,comments) Values('$Emp_id','$Project_Name','$Manager','$comments')";
if ($conn->query($sql) === TRUE) {
    // echo "Leave application submitted successfully!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
"width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"> <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon" />
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
                display: none;
            }

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
            padding: 10px 20px;
            color: var(--text-color);
            background-color: var(--background-color1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            border: 1px solid #ccc;
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
            <a href="../peers/peers.php" class="sidenavbtn"><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php" class="sidenavbtn"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formmain.php" class="sidenavbtn sidebtnactive "><i class="bi bi-ui-radios"></i></a>
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
            <span id="greetingtxt">Forms </span><span id="username"></span>
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

</head>
<style>
    /* style.css */

body {
	font-family:
'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	margin: 0;
	padding: 0;
	background-color: var(--background-color);
	color:var(--text-color);
}

#app {
	display: flex;
	flex-direction: column;
	min-height: 100vh;
		background-color: var(--background-color);
	color:var(--text-color);
}

/*header {*/
/*	background-color: var(--background-color1);*/
/*	color: var(--text-color);*/
/*	text-align: center;*/
/*	padding: 1em;*/
/*}*/

nav {
	background-color: #C5C6D0;
	color:var(--text-color);

	/*background-color: var(--background-color);*/
}

nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
}

nav li {
	margin: 0;
}

nav a {
	text-decoration: none;
	color: #fff;
	padding: 1em;
	display: block;
	transition: background-color 0.3s ease;
}

nav a:hover {
	/*background-color: #45a049;*/
		background-color: var(--background-color);
	/*color:var(--text-color);*/
}

main {
	flex: 1;
	padding: 1em;
}

#content {
	max-width: 1000px;
	margin: 0 auto;
	background-color: var(--background-color);
	padding: 20px;
	border-radius: 8px;
	box-shadow:
0 0 10px rgba(0, 0, 0, 0.1);
}

#content h2 {
	color: var(--text-color);
}

#content img {
	width: 400px;
	height: auto;
	margin: 0 auto;
	display: block;
	border-radius: 10px;
	box-shadow: 
2px 2px 5px rgba(0, 0, 0, 0.2);
	border: 3px solid #2F8D46;
}
form label {
	/*display: block;*/
	/*margin-bottom: 8px;*/
}
</style>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:var(--text-color);
         /*background: var(--background-color1);*/
        
    }
    .container {
        /* max-width: 800px; */
        height: 500px;
        /*background: var(--background-color1);*/
        /* width: 800px; */
        padding: 25px 20px 1px 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        color:var(--text-color);
        	background-color: var(--background-color);
	color:var(--text-color);
    }

     .container.text {
        /*color:var(--text-color);*/
        text-align: center;
        font-size: 41px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
        /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
        /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
 /*       	background-color: var(--background-color);*/
	color:var(--text-color);
    }
    
    .container form {
        padding: 30px 0 0 0;
    }

    .container form .form-row {
        display: flex;
        margin: 32px 0;
    }

    form .form-row .input-data {
        width: 100%;
        height: 60px;
        margin: 0 70px;
        position: relative;
    }
    form .form-row .textarea {
        height: 70px;  
    }

   .input-data input,
    .textarea textarea,
    select ,
    textarea {
        display: block;
        width: 100%;
        height: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        background-color: var(--background-color);
	    color:var(--text-color);
    }

    .input-data input:focus~label,
    .textarea textarea:focus~label,
    .input-data input:valid~label,
    .textarea textarea:valid~label {
        transform: translateY(-20px);
        font-size: 14px;
        /*color: #3498db;*/
 /*    	background-color: var(--background-color);*/
	color:var(--text-color);
       
    }

    .textarea textarea {
        resize: none;
        padding-top:30px;
        height:120px;   
    }

    .input-data label {
        position: absolute;
        pointer-events: none;
        bottom: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        
    }

    /*.textarea label {*/
    /*    width: 100%;*/
    /*    height:40%;*/
    /*    bottom: 40px;*/
    /*    background: #fff;*/
    /*    background: red;*/
    /*}*/

    /*.input-data .underline {*/
    /*    position: absolute;*/
    /*    bottom: 0;*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*}*/

    /*.input-data .underline:before {*/
    /*    position: absolute;*/
    /*    content: "";*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*    background: #3498db;*/
    /*    transform: scaleX(0);*/
    /*    transform-origin: center;*/
    /*    transition: transform 0.3s ease;*/
    /*}*/
.text
{ 
    /*background-color:var(--background-color1);*/
    color:var(--text-color);
     text-align: center;
      font-size: 41px;
      font-weight: 600;
      /*font-family: 'Poppins', sans-serif;*/
      /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
      /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
      /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
      /*-webkit-background-clip: text;*/
      /*-webkit-text-fill-color: transparent;*/
}
    .input-data input:focus~.underline:before,
    .input-data input:valid~.underline:before,
    .textarea textarea:focus~.underline:before,
    .textarea textarea:valid~.underline:before {
        transform: scale(1);
    }


    .submit-btn .input-data {
        overflow: hidden;
        height: 45px !important;
        width: 25% !important;
        color:var(--text-color);
    }
  
    .submit-btn .input-data .inner {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #161616, #161616, #161616); 
        /*transition: all 0.4s;*/
    }

    .submit-btn .input-data:hover .inner {
        left: 0;
    }

    .submit-btn .input-data input {
        background: none;
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
        
    }
.for{
    /*width:70vw;*/
    /*height:90vh;*/
    /*margin-left:200px;*/
    background-color:var(--background-color1);
    color:var(--text-color);
    /*margin-top:10px;*/
    /*padding-top:10px;*/
   
}
/*.h1{*/
/*    text-align:center;*/
/*    padding-top:10px;*/
/*}*/
/*.label{*/
/*    margin-left:50px;*/
/*    padding-left:100px;*/
/*    padding-top:40px;*/
/*    font-size:30px;*/
/*    font-weight:bolder;*/
/*    font-family:sans-serif;*/
/*}*/
.a{
    text-decoration:none;
    color:var(--text-color);
    font-family:sans-serif;
    font-weight:bolder;
}
.a:hover{
    text-decoration:none;
    color:var(--text-color);
    background-color:var(--background-color);
}
.submit{
    background-color: #C5C6D0;
    color:var(--text-color);
    border:2px solid black;
    border-radius:5px;
    margin-top:70px;
    padding-top:10px;
    text-align:center;
    justify-content:center;
    margin-bottom:20px;
     font-size: 17px;
        font-weight: bolder;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
}
.submit:hover{
    background-color:var(--background-color1);
    color:var(--text-color);
}
    @media (max-width: 700px) {
        .container .text {
            font-size: 30px;
        }

        .container form {
            padding: 10px 0 0 0;
        }

        .container form .form-row {
            display: block;
        }

        form .form-row .input-data {
            margin: 35px 0 !important;
        }

        .submit-btn .input-data {
            width: 40% !important;
        }
    }
</style>


<body>
	<div id="app">
		<header>
			<!--<h1>-->
			<!--	Forms-->
			<!--</h1>-->
		</header>
		<nav>
			<ul>
				<li>
					<a class="a"href="performance.php" onclick=
					"changeContent('Performance')">
						Performance
					</a>
				</li>
				<li>
					<a class="a"href="onboardingform.php" onclick=
					"changeContent('Onboarding')">
                    Onboarding
					</a>
				</li>
				<li>
					<a class="a"href="transferform.php" onclick=
					"changeContent('Transfer Form')">
                    Transfer Form
					</a>
				</li>
                <li>
					<a class="a"href="paymentform.php" onclick=
					"changeContent('Payment Form')">
                    Payment Form
					</a>
				</li>
				 <li>
					<a class="a"href="leaveform.php" onclick=
					"changeContent('Payment Form')">
                    Leave Form
					</a>
				</li>
			</ul>
		</nav>
		<main>
<form method="POST" autocomplete="off">
    <!--<div class="for">-->
    <!--    <H1 class="h1">Transfer Form</H1>-->
    <!--<label class="label" for="">Emp_id</label>-->
    <!--<input  type="text" name="Emp_id" width="50vw" required value=""/>-->
    <!--<label class="label" for="">Project_Name</label>-->
    <!--<input  type="text" name="Project_Name" width="50vw" required value=""/>-->
    <!--<label class="label" for="">Reason</label>-->
    <!--<input class="input" type="text" name="comments" height="20vh"width="50vw" required value=""/>-->
    <!--<button class="submit" type="submit" name="submit">Submit</button>-->
     <div class="container">
<div class="text">
  Transfer Form
</div>
<form action="#">
    <div class="form-row">
        <div class="input-data">
            <input type="text"name="Emp_id" required>
            <div class="underline"></div>
            <label for="">Emp_id</label>
        </div>
        <div class="input-data">
            <input type="text"  name="Project_Name" required>
            <div class="underline"></div>
            <label for="">Project_Name</label>
        </div>
    </div>
    <div class="form-row">
    <div class="input-data">
            <input type="text"  name="Manager" required>
            <div class="underline"></div>
            <label for="">Manager</label>
        </div>
    <div class="input-data">
            <input type="text"  name="comments" required>
            <div class="underline"></div>
            <label for="">comments</label>
        </div>
    </div>
           <button class="submit" type="submit" name="submit">Submit</button>

</form>
</div>
    </div>
</form>
//leaveform.php

<?php

require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emp_id=$_POST['Emp_id'];
    $LeaveType=$_POST['Leave_Type'];
    $Date=$_POST['Date'];
    $Reason=$_POST['Reason'];
}
// Insert data into the database
$sql = "INSERT INTO `Leave` (Emp_id,Leave_Type,Date,Reason) Values('$Emp_id','$Leave_Type','$Date','$Reason')";
if ($conn->query($sql) === TRUE) {
    // echo "Leave application submitted successfully!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
"width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"> <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon" />
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
                display: none;
            }

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
            padding: 10px 20px;
            color: var(--text-color);
            background-color: var(--background-color1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            border: 1px solid #ccc;
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
            <a href="../peers/peers.php" class="sidenavbtn "><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php" class="sidenavbtn"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formmain.php" class="sidenavbtn sidebtnactive "><i class="bi bi-ui-radios"></i></a>
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
            <span id="greetingtxt">Forms</span><span id="username"></span>
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

</head>


<style>
    /* style.css */

body {
	font-family:
'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	margin: 0;
	padding: 0;
	background-color: var(--background-color);
	color:var(--text-color);
}

#app {
	display: flex;
	flex-direction: column;
	min-height: 100vh;
		background-color: var(--background-color);
	color:var(--text-color);
}

/*header {*/
/*	background-color: var(--background-color1);*/
/*	color: var(--text-color);*/
/*	text-align: center;*/
/*	padding: 1em;*/
/*}*/

nav {
	background-color: #C5C6D0;
	color:var(--text-color);

	/*background-color: var(--background-color);*/
}

nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
}

nav li {
	margin: 0;
}

nav a {
	text-decoration: none;
	color: #fff;
	padding: 1em;
	display: block;
	transition: background-color 0.3s ease;
}

nav a:hover {
	/*background-color: #45a049;*/
		background-color: var(--background-color);
	/*color:var(--text-color);*/
}

main {
	flex: 1;
	padding: 1em;
}

#content {
	max-width: 1000px;
	margin: 0 auto;
	background-color: var(--background-color);
	padding: 20px;
	border-radius: 8px;
	box-shadow:
0 0 10px rgba(0, 0, 0, 0.1);
}

#content h2 {
	color: var(--text-color);
}

#content img {
	width: 400px;
	height: auto;
	margin: 0 auto;
	display: block;
	border-radius: 10px;
	box-shadow: 
2px 2px 5px rgba(0, 0, 0, 0.2);
	border: 3px solid #2F8D46;
}
form label {
	/*display: block;*/
	/*margin-bottom: 8px;*/
}
</style>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:var(--text-color);
         /*background: var(--background-color1);*/
        
    }
    .container {
        /* max-width: 800px; */
        height: 550px;
        /*background: var(--background-color1);*/
        /* width: 800px; */
        padding: 25px 20px 1px 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        color:var(--text-color);
        	background-color: var(--background-color);
	color:var(--text-color);
    }

     .container.text {
        /*color:var(--text-color);*/
        text-align: center;
        font-size: 41px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
        /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
        /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
 /*       	background-color: var(--background-color);*/
	color:var(--text-color);
    }
    
    .container form {
        padding: 30px 0 0 0;
    }

    .container form .form-row {
        display: flex;
        margin: 32px 0;
    }

    form .form-row .input-data {
        width: 100%;
        height: 60px;
        margin: 0 70px;
        position: relative;
    }
    form .form-row .textarea {
        height: 70px;  
    }

   .input-data input,
    .textarea textarea,
    select ,
    textarea {
        display: block;
        width: 100%;
        height: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        background-color: var(--background-color);
	    color:var(--text-color);
    }

    .input-data input:focus~label,
    .textarea textarea:focus~label,
    .input-data input:valid~label,
    .textarea textarea:valid~label {
        transform: translateY(-20px);
        font-size: 14px;
        /*color: #3498db;*/
 /*    	background-color: var(--background-color);*/
	color:var(--text-color);
       
    }

    .textarea textarea {
        resize: none;
        padding-top:30px;
        height:120px;   
    }

    .input-data label {
        position: absolute;
        pointer-events: none;
        bottom: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        
    }

    /*.textarea label {*/
    /*    width: 100%;*/
    /*    height:40%;*/
    /*    bottom: 40px;*/
    /*    background: #fff;*/
    /*    background: red;*/
    /*}*/

    /*.input-data .underline {*/
    /*    position: absolute;*/
    /*    bottom: 0;*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*}*/

    /*.input-data .underline:before {*/
    /*    position: absolute;*/
    /*    content: "";*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*    background: #3498db;*/
    /*    transform: scaleX(0);*/
    /*    transform-origin: center;*/
    /*    transition: transform 0.3s ease;*/
    /*}*/
.text
{ 
    /*background-color:var(--background-color1);*/
    color:var(--text-color);
     text-align: center;
      font-size: 41px;
      font-weight: 600;
      /*font-family: 'Poppins', sans-serif;*/
      /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
      /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
      /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
      /*-webkit-background-clip: text;*/
      /*-webkit-text-fill-color: transparent;*/
}
    .input-data input:focus~.underline:before,
    .input-data input:valid~.underline:before,
    .textarea textarea:focus~.underline:before,
    .textarea textarea:valid~.underline:before {
        transform: scale(1);
    }


    .submit-btn .input-data {
        overflow: hidden;
        height: 45px !important;
        width: 25% !important;
        color:var(--text-color);
    }
  
    .submit-btn .input-data .inner {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #161616, #161616, #161616); 
        /*transition: all 0.4s;*/
    }

    .submit-btn .input-data:hover .inner {
        left: 0;
    }

    .submit-btn .input-data input {
        background: none;
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
        
    }
.for{
    /*width:70vw;*/
    /*height:90vh;*/
    /*margin-left:200px;*/
    background-color:var(--background-color1);
    color:var(--text-color);
    /*margin-top:10px;*/
    /*padding-top:10px;*/
   
}
/*.h1{*/
/*    text-align:center;*/
/*    padding-top:10px;*/
/*}*/
/*.label{*/
/*    margin-left:50px;*/
/*    padding-left:100px;*/
/*    padding-top:40px;*/
/*    font-size:30px;*/
/*    font-weight:bolder;*/
/*    font-family:sans-serif;*/
/*}*/
.a{
    text-decoration:none;
    color:var(--text-color);
    font-family:sans-serif;
    font-weight:bolder;
}
.a:hover{
    text-decoration:none;
    color:var(--text-color);
    background-color:var(--background-color);
}
.submit{
    background-color: #C5C6D0;
    color:var(--text-color);
    border:2px solid black;
    border-radius:5px;
    margin-top:70px;
    padding-top:10px;
    text-align:center;
    justify-content:center;
    margin-bottom:20px;
     font-size: 17px;
        font-weight: bolder;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
}
.submit:hover{
    background-color:var(--background-color1);
    color:var(--text-color);
}
    @media (max-width: 700px) {
        .container .text {
            font-size: 30px;
        }

        .container form {
            padding: 10px 0 0 0;
        }

        .container form .form-row {
            display: block;
        }

        form .form-row .input-data {
            margin: 35px 0 !important;
        }

        .submit-btn .input-data {
            width: 40% !important;
        }
    }
</style>

<body>
	<div id="app">
		<header>
			<!--<h1>-->
			<!--	Forms-->
			<!--</h1>-->
		</header>
		<nav>
			<ul>
				<li>
					<a class="a"href="performance.php" onclick=
					"changeContent('Performance')">
						Performance
					</a>
				</li>
				<li>
					<a class="a"href="onboardingform.php" onclick=
					"changeContent('Onboarding')">
                    Onboarding
					</a>
				</li>
				<li>
					<a class="a"href="transferform.php" onclick=
					"changeContent('Transfer Form')">
                    Transfer Form
					</a>
				</li>
                <li>
					<a class="a"href="paymentform.php" onclick=
					"changeContent('Payment Form')">
                    Payment Form
					</a>
				</li>
				 <li>
					<a class="a"href="leaveform.php" onclick=
					"changeContent('Payment Form')">
                    Leave Form
					</a>
				</li>
			</ul>
		</nav>
		<main>
<form method="POST" autocomplete="off">
    <!--<div class="for">-->
    <!--    <H1 class="h1">Leave Form</H1>-->
    <!--<label class="label" for="">Emp_id</label>-->
    <!--<input  type="text" name="Emp_id" width="50vw" required value=""/>-->
    <!--<label class="label" for="">Leave_Type</label>-->
    <!--<input  type="text" name="Leave_Type" width="50vw" required value=""/>-->
    <!--<label class="label" for="">Date</label>-->
    <!--<input type="text" name="Date" height="20vh"width="50vw" required value=""/>-->
    <!-- <label class="label" for="">Reason</label>-->
    <!--<input class="input" type="text" name="Reason" height="20vh"width="50vw" required value=""/>-->
    <!--<button class="submit"type="submit" name="submit">Submit</button>-->
    
    <!--</div>-->
    
    <div class="container">
<div class="text">
    Leave managment
</div>
<form action="#">
    <div class="form-row">
        <div class="input-data">
            <input type="text" required>
            <div class="underline"></div>
            <label for="">Emp_id</label>
        </div>
        </div>
<div class="form-row">
       
       <div class="input-data">
        <select class="select" name="leave_type"  class="input-data" required>
                    <option value="Sick">Sick</option>
                    <option value="Vacation">Vacation</option>
                    <option value="Casual">Casual</option>
            </select>
        </div> 
    </div>
    <div class="form-row">
        <div class="input-data">
            <input type="date" name="date" required>
            <div class="underline"></div>
        </div>
        <div class="input-data">
             <input type="date" name="date" required>
            <div class="underline"></div>
        </div>
    </div>
   
     <div class="form-row">
       <div class="input-data">
            <input  name="Reason" required>
            <div class="underline"></div>
            <label for="">Reason</label>
        </div>
             <button class="submit"type="submit" name="submit">Submit</button>
            </div>

        </div>

      </div>
</form>
</div>
</form> 

//paymentform.php


<?php
// Database connection
require 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql="CREATE TABLE `u745359346_hrms_wdiaug_24`.`my table` (`emp_id` INT(100) NOT NULL , `Project_Name` VARCHAR(50) NOT NULL , `comments` VARCHAR(200) NOT NULL )";
// $result=mysqli_query($conn,$sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emp_id=$_POST['Emp_id'];
    $ProjectName=$_POST['Project_Name'];
    $comments=$_POST['comments'];
}
// Insert data into the database
$sql = "INSERT INTO `my table` (Emp_id,Project_Name,comments) Values('$Emp_id','$ProjectName','$comments')";
if ($conn->query($sql) === TRUE) {
    // echo "Leave application submitted successfully!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
"width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"> <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon" />
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

        /* input {*/
        /*    display: block;*/
        /*    width: 50%;*/
        /*    margin: auto;*/
        /*    margin-bottom: 20px;*/
        /*    padding: 10px;*/
        /*    border: 0px solid transparent;*/
        /*    border-radius: 10px;*/
        /*    color: #1c202b;*/
        /*    background-color: #f0f1f6;*/
        /*    animation: slideIn 1.5s forwards;*/
        /*    margin-left: 30px;*/
        /*} */

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
            height: 45px;
            margin: auto;
            padding: 5px;
            border: 0px solid transparent;
            border-radius: 9px;
            font-size: 10px;
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
                display: none;
            }

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
        .filter input,
        .filter .search-btn {
            justify-content:space-between;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
            color: var(--text-color);
            background-color: var(--background-color1);
        }

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
            padding: 10px 20px;
            color: var(--text-color);
            background-color: var(--background-color1);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            border: 1px solid #ccc;
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
            <a href="../peers/peers.php" class="sidenavbtn "><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php" class="sidenavbtn"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formmain.php" class="sidenavbtn sidebtnactive "><i class="bi bi-ui-radios"></i></a>
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
            <span id="greetingtxt">Forms</span><span id="username"></span>
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

</head>
<style>
    /* style.css */

body {
	font-family:
'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	margin: 0;
	padding: 0;
	background-color: var(--background-color);
	color:var(--text-color);
}

#app {
	display: flex;
	flex-direction: column;
	min-height: 100vh;
		background-color: var(--background-color);
	color:var(--text-color);
}

/*header {*/
/*	background-color: var(--background-color1);*/
/*	color: var(--text-color);*/
/*	text-align: center;*/
/*	padding: 1em;*/
/*}*/

nav {
	background-color: #C5C6D0;
	color:var(--text-color);

	/*background-color: var(--background-color);*/
}

nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
}

nav li {
	margin: 0;
}

nav a {
	text-decoration: none;
	color: #fff;
	padding: 1em;
	display: block;
	transition: background-color 0.3s ease;
}

nav a:hover {
	/*background-color: #45a049;*/
		background-color: var(--background-color);
	/*color:var(--text-color);*/
}

main {
	flex: 1;
	padding: 1em;
}

#content {
	max-width: 1000px;
	margin: 0 auto;
	background-color: var(--background-color);
	padding: 20px;
	border-radius: 8px;
	box-shadow:
0 0 10px rgba(0, 0, 0, 0.1);
}

#content h2 {
	color: var(--text-color);
}

#content img {
	width: 400px;
	height: auto;
	margin: 0 auto;
	display: block;
	border-radius: 10px;
	box-shadow: 
2px 2px 5px rgba(0, 0, 0, 0.2);
	border: 3px solid #2F8D46;
}
form label {
	/*display: block;*/
	/*margin-bottom: 8px;*/
}
</style>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color:var(--text-color);
         /*background: var(--background-color1);*/
        
    }
    .container {
        /* max-width: 800px; */
        height: 450px;
        /*background: var(--background-color1);*/
        /* width: 800px; */
        padding: 25px 20px 1px 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        color:var(--text-color);
        	background-color: var(--background-color);
	color:var(--text-color);
    }

     .container.text {
        /*color:var(--text-color);*/
        text-align: center;
        font-size: 41px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
        /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
        /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
 /*       	background-color: var(--background-color);*/
	color:var(--text-color);
    }
    
    .container form {
        padding: 30px 0 0 0;
    }

    .container form .form-row {
        display: flex;
        margin: 32px 0;
    }

    form .form-row .input-data {
        width: 100%;
        height: 60px;
        margin: 0 70px;
        position: relative;
    }
    form .form-row .textarea {
        height: 70px;  
    }

   .input-data input,
    .textarea textarea,
    select ,
    textarea {
        display: block;
        width: 100%;
        height: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        background-color: var(--background-color);
	    color:var(--text-color);
    }

    .input-data input:focus~label,
    .textarea textarea:focus~label,
    .input-data input:valid~label,
    .textarea textarea:valid~label {
        transform: translateY(-20px);
        font-size: 14px;
        /*color: #3498db;*/
 /*    	background-color: var(--background-color);*/
	color:var(--text-color);
       
    }

    .textarea textarea {
        resize: none;
        padding-top:30px;
        height:120px;   
    }

    .input-data label {
        position: absolute;
        pointer-events: none;
        bottom: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        
    }

    /*.textarea label {*/
    /*    width: 100%;*/
    /*    height:40%;*/
    /*    bottom: 40px;*/
    /*    background: #fff;*/
    /*    background: red;*/
    /*}*/

    /*.input-data .underline {*/
    /*    position: absolute;*/
    /*    bottom: 0;*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*}*/

    /*.input-data .underline:before {*/
    /*    position: absolute;*/
    /*    content: "";*/
    /*    height: 2px;*/
    /*    width: 100%;*/
    /*    background: #3498db;*/
    /*    transform: scaleX(0);*/
    /*    transform-origin: center;*/
    /*    transition: transform 0.3s ease;*/
    /*}*/
.text
{ 
    /*background-color:var(--background-color1);*/
    color:var(--text-color);
     text-align: center;
      font-size: 41px;
      font-weight: 600;
      /*font-family: 'Poppins', sans-serif;*/
      /* background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); */
      /* background: -webkit-linear-gradient(right, #161616, #c1bdc4, #0d0d0d, #c6c3c7); */
      /*background: -webkit-linear-gradient(right, #161616, #161616, #161616);*/
      /*-webkit-background-clip: text;*/
      /*-webkit-text-fill-color: transparent;*/
}
    .input-data input:focus~.underline:before,
    .input-data input:valid~.underline:before,
    .textarea textarea:focus~.underline:before,
    .textarea textarea:valid~.underline:before {
        transform: scale(1);
    }


    .submit-btn .input-data {
        overflow: hidden;
        height: 45px !important;
        width: 25% !important;
        color:var(--text-color);
    }
  
    .submit-btn .input-data .inner {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #161616, #161616, #161616); 
        /*transition: all 0.4s;*/
    }

    .submit-btn .input-data:hover .inner {
        left: 0;
    }

    .submit-btn .input-data input {
        background: none;
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
        
    }
.for{
    /*width:70vw;*/
    /*height:90vh;*/
    /*margin-left:200px;*/
    background-color:var(--background-color1);
    color:var(--text-color);
    /*margin-top:10px;*/
    /*padding-top:10px;*/
   
}
/*.h1{*/
/*    text-align:center;*/
/*    padding-top:10px;*/
/*}*/
/*.label{*/
/*    margin-left:50px;*/
/*    padding-left:100px;*/
/*    padding-top:40px;*/
/*    font-size:30px;*/
/*    font-weight:bolder;*/
/*    font-family:sans-serif;*/
/*}*/
.a{
    text-decoration:none;
    color:var(--text-color);
    font-family:sans-serif;
    font-weight:bolder;
}
.a:hover{
    text-decoration:none;
    color:var(--text-color);
    background-color:var(--background-color);
}
/* input{*/
/*    width:70vw;*/
/*    padding-left:50px;*/
/*    height:5vh;*/
/*    color:var(--text-color);*/
/*    border:2px solid black;*/
/*}*/
/*.input{*/
/*     width:70vw;*/
/*    padding-left:50px;*/
/*    height:15vh;*/
/*    color:var(--text-color);*/
/*    border:2px solid black;*/
/*}*/
.submit{
    background-color: #C5C6D0;
    color:var(--text-color);
    border:2px solid black;
    border-radius:5px;
    margin-top:70px;
    padding-top:10px;
    text-align:center;
    justify-content:center;
    margin-bottom:20px;
     font-size: 17px;
        font-weight: bolder;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        position: relative;
        z-index: 2;
}
.submit:hover{
    background-color:var(--background-color1);
    color:var(--text-color);
}
    @media (max-width: 700px) {
        .container .text {
            font-size: 30px;
        }

        .container form {
            padding: 10px 0 0 0;
        }

        .container form .form-row {
            display: block;
        }

        form .form-row .input-data {
            margin: 35px 0 !important;
        }

        .submit-btn .input-data {
            width: 40% !important;
        }
    }
</style>

<body>
	<div id="app">
		<header>
			<!--<h1>-->
			<!--	Forms-->
			<!--</h1>-->
		</header>
		<nav>
			<ul>
				<li>
					<a class="a"href="performance.php" onclick=
					"changeContent('Performance')">
						Performance
					</a>
				</li>
				<li>
					<a class="a"href="onboardingform.php" onclick=
					"changeContent('Onboarding')">
                    Onboarding
					</a>
				</li>
				<li>
					<a class="a" href="transferform.php" onclick=
					"changeContent('Transfer Form')">
                    Transfer Form
					</a>
				</li>
                <li>
					<a class="a"href="paymentform.php" onclick=
					"changeContent('Payment Form')">
                    Payment Form
					</a>
				</li>
				 <li>
					<a class="a"href="leaveform.php" onclick=
					"changeContent('Payment Form')">
                    Leave Form
					</a>
				</li>
			</ul>
		</nav>
		<main>
<form method="POST" autocomplete="off">
    <!--<div class="for">-->
    <!--    <H1 class="h1">Performance Form</H1>-->
    <!--<label class="label" for="">Emp_id</label>-->
    <!--<input  type="text" name="Emp_id" width="50vw" required value=""/>-->
    <!-- <label class="label" for="">Project_Name</label>-->
    <!--<input  type="text" name="Project_Name" width="50vw" required value=""/>-->
    <!-- <label class="label" for="">comments</label>-->
    <!--<input class="input" type="text" name="comments" height="20vh"width="50vw" required value=""/>-->
    <!--<button class="submit"type="submit" name="submit">Submit</button>-->
    <!--</div>-->   
<div class="container">
    <div class="text">
       Payment Form
    </div>
    <form action="#">
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Emp_id" required>
                <div class="underline"></div>
                <label for="">Emp_id</label>
            </div>
            <div class="input-data">
                <input type="text" name="Project_Name" required>
                <div class="underline"></div>
                <label for="">Project_Name</label>
            </div>
        </div>
            
        
       <div class="form-row">
        <div class="input-data">
                <input type="text" name="comments" required>
                <div class="underline"></div>
                <label for="">comment</label>
            </div>
       
           <button class="submit"type="submit" name="submit">Submit</button>
    </form>
</div>
