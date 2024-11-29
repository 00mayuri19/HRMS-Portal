//It.php
<?php
$servername = "srv544.hstgr.io";
$username = "u745359346_hrms_wdiaug_24";
$password = "WDI_HRMS_aug_24_calanjiyam#2024";
$dbname = "u745359346_hrms_wdiaug_24";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM IT";
$result=mysqli_query($conn, $sql);
echo"<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Position</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo"<tr>
                        <td>".$row["ID"]."</td>
                        <td>".$row["Name"]."</td>
                        <td>".$row["Email"]."</td>
                        <td>".$row["Position"]."</td>
                    </tr>";
}
?>
//formatsettings.html

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Calanjiyam Admin Portal</title>
  <style>
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");
/:root {
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

.container2{
    width:80vw;
    height:100px;
    padding-left:150px;

}
.head{
     border:2px solid transparent;
    border-radius:5%;
    display:block;
    box-shadow:#051094;
    background-color:white;
}
.user{
    display:flex;
    justify-content:space-between;
}
.user h1{
    font-weight:bolder;
    font-family: Helvetica, Arial, sans-serif;
}
.h2{
    font-weight:bold;
    font-family:"nunito", sans-serif;
}
.user button{
    margin-top:20px;
    width:100px;
    height:60px;
    background-color:#63C5DA;
    font-size:15px;
}
.user button a{
    text-decoration:none;
    color:black;
}
.user button a:hover{
    color:white;
}
.user button:hover{
    color:white;
    background-color:red;
}
#time {
    font-size: 1.5em;
}
.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}

#search-options {
    padding: 10px;
    font-size: 16px;
}

#search-input {
    padding: 10px;
    font-size: 16px;
    margin-left: 10px;
    margin-right: 10px;
    width: 300px;
}

.button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
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

  #sidebar{
       display: block;
            width: 80px;
            height: 100%;
            position: fixed;
            background-color: var(--background-color1);
            animation: fadeIn 1s forwards;
    }
    #sidebar_logo{
        display: block;
        width: 60px;
        margin: auto;
        margin-top: 10px;
    }
    #sidenav{
        display: block;
        width: 60px;
        height: 80%;
        margin: auto;
        margin-top: 20px;
    }
    .sidenavbtn{
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
    .sidenavbtn:hover{
        color:  var(--text-color);
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .sidebtnactive{
        color:  white;
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .profileside{
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
    .profileside:hover{
        color:  var(--text-color);
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .powerside{
        display: block;
        width: 40px;
        padding: 5px;
        margin-left: 10px;
        margin-top: 20px;
        bottom:40px;
        position: absolute;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        color: red;
        text-shadow: 4px 4px 3px rgba(1, 0, 0, 1);
    }
    .powerside:hover{
        color:  var(--text-color);
        background-color: red;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
#mobileheader{
      display: none;
    }
    #mobileprofile{
      display: block;
      vertical-align: middle;
      text-decoration: none;
      text-align: middle;
      vertical-align: middle;
    }
    #mobileprofile img{
      display: block;
      width: 50px;
      margin: 10px;
      margin-top: 20px;
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    #mobilelogo{
      display: block;
      width: 100px;
      margin: auto;
      margin-top: 0px;
      vertical-align: middle;
    }
    .mobile_navbtn{
        display: inline-block;
        width: 30px;
        padding: 5px;
        margin: auto;
        margin-top: 20px;
        margin-right: 5px;
        float: right;
        text-decoration: none;
        font-size: 26px;
        color: var(--text-color);
    }
    .mobile_navbtn:hover{
        color:  var(--text-color);
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .mobile_navbtnactive{
        color:  white;
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    #bottomnav{
        display: none;
    }
    
    .bottomnavbtn{
        display: block;
        width: 50px;
        padding: 5px;
        margin: auto;
        margin-top: 20px;
        margin-left: 10px;
        text-align: center;
        text-decoration: none;
        font-size: 26px;
        color: var(--text-color);
    }
    .bottomnavbtn:hover{
        color:  var(--text-color);
        background-color: #0325bd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .bottomnavbtnactive{
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
    #mobileLightDark{
      background-color: transparent;
    }
      #mobileLightDark:hover{
          color:white;
      }
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
            background-color: transparent;
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
                margin-left:500px;
            }

            #mainarea {
                display: block;
                width: 96%;
                margin: auto;
                margin-top: 5px;
                margin-bottom: 100px;
                margin-left:500px;
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
        .dropbtn {
 background-color: #B2FFFF;
  color: black;
 margin-left:1200px;
  font-size: 20px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: absolute;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:1200px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#004F98;
    color:white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn{background-color: #B2FFFF;}
/* Change the background color of the dropdown button when the dropdown content is shown */
    </style>
<style>
navbar{
    display:flex;
    padding-left:50px;
}
.mobi{
    margin-left:700px;
}
#desktopDarkLightSwitch{
    margin-top:30px;
    display:var(--background-color);
    color:var(--text-color);
    margin-left:1600px;
    margin-top:20px;
    font-size:20px;
}
#desktopDarkLightSwitch:hover{
    background-color:white;
    color:var(--accent-color);
}
  </style>
  <style>
      @media (max-width: 767px){
      #sidebar{
        display: none;
      }
      #desktopDarkLightSwitch{
        display: none;
      }
}
  </style>
  <style>
.dropbtn {
 background-color: #B2FFFF;
  color: black;
 margin-left:1250px;
  font-size: 20px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: absolute;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:1250px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#004F98;
    color:white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn{background-color: #B2FFFF;}
navbar{
    display:flex;
    padding-left:50px;
}
.mobi{
    margin-left:500px;
}
#desktopDarkLightSwitch{
    margin-top:30px;
    display:var(--background-color);
    color:var(--text-color);
    margin-left:1400px;
    margin-top:20px;
    font-size:20px;
}
#desktopDarkLightSwitch:hover{
    background-color:white;
    color:var(--accent-color);
}
/*.tree,*/
/*.tree ul,*/
/*.tree li {*/
/*    list-style: none;*/
/*    margin: 0;*/
/*    padding: 0;*/
/*    position: relative;*/
/*}*/
/*.tree {*/
/*    margin: 0 0 1em;*/
/*    text-align: center;*/
/*    margin-left:500px;*/
/*    margin-top:200px;*/
/*}*/
/*.tree,*/
/*.tree ul {*/
/*    display: table;*/
/*}*/
/*.tree ul {*/
/*    width: 100%;*/
/*}*/
/*.tree li {*/
/*    display: table-cell;*/
/*    padding: .5em 0;*/
/*    vertical-align: top;*/
/*}*/
/*.tree li:before {*/
/*    outline: solid 1px #666;*/
/*    content: "";*/
/*    left: 0;*/
/*    position: absolute;*/
/*    right: 0;*/
/*    top: 0;*/
/*}*/
/*.tree li:first-child:before {*/
/*    left: 50%;*/
/*}*/
/*.tree li:last-child:before {*/
/*    right: 50%;*/
/*}*/
/*.tree code,*/
/*.tree span {*/
/*    border: solid .1em #666;*/
/*    border-radius: .2em;*/
/*    display: inline-block;*/
/*    margin: 0 .2em .5em;*/
/*    padding: .2em .5em;*/
/*    position: relative;*/
/*    background-color:cadetblue;*/
/*}*/
/*.tree ul:before,*/
/*.tree code:before,*/
/*.tree span:before {*/
/*    outline: solid 1px #666;*/
/*    content: "";*/
/*    height: .5em;*/
/*    left: 50%;*/
/*    position: absolute;*/
/*}*/
/*.tree ul:before {*/
/*    top: -.5em;*/
/*}*/
/*.tree code:before,*/
/*.tree span:before {*/
/*    top: -.55em;*/
/*}*/
/*.tree>li {*/
/*    margin-top: 0;*/
/*}*/
/*.tree>li:before,*/
/*.tree>li:after,*/
/*.tree>li>code:before,*/
/*.tree>li>span:before {*/
/*    outline: none;*/
/*}*/
/*.li{*/
/*margin-left:20px;*/
/*}*/
.main{
    margin-left:50px;
    background-color:var( --background-color1);
    margin-left:200px;
    margin-top:50px;
    padding-top:50px;
    width:70vw;
    height:50vh;
    border:2px solid transparent;
    border-radius:5%;
    display:block;
    justify-content:space-evenly;
}
.main2{
    display:flex;
    padding-top:0px;
    margin-top:0px;
    justify-content:space-evenly;
    padding-left:-100px;
}
/* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
}

input:checked + .slider {
    background-color: #2196F3;
}

input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
.logo{
    font-size:40px;
}
  </style>
  <style>
      @media (max-width: 767px){
      #sidebar{
        display: none;
      }
      #desktopDarkLightSwitch{
        display: none;
      }
}
  </style>
</head>
<body>
    
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

        function authorizeToken() {
            if (!getCookie('token')) {
                window.location.href = '../login.php';
            } else {
                let token = getCookie('token');
                $.ajax({
                    url: '../services/user/authorizeToken.php',
                    type: 'POST',
                    data: {
                        token: token,
                    },
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.message === "success") {
                            let date = new Date();
                            date = date.toISOString().slice(0, 10);
                            // console.log(response.name);
                            document.getElementById("username").innerHTML = response.name;
                            let loading = document.getElementById("loading");
                            loading = loading.cloneNode(true);
                            loading.id = "tdyaction_loading";
                            loading.style.display = "block";
                            document.getElementById("todayaction").innerHTML = '';
                            document.getElementById("todayaction").appendChild(loading);
                            document.getElementById("todayaction").style.pointerEvents = "none";
                            document.getElementById("todayaction").style.cursor = "no-drop";
                            todaystatus(date, token);
                            todayteammembers(date, token);
                            attendanceSummary();
                            holidaysSummary();
                        }
                    },
                    error: function (xhr, status, error) {
                        deleteCookie('token');
                        window.location.href = '../login.php';
                    }
                });
            }
        }

        function authorizeToken1() {
            if (!getCookie('token')) {
                window.location.href = '../login.php';
            } else {
                let token = getCookie('token');
                $.ajax({
                    url: '../services/user/authorizeToken.php',
                    type: 'POST',
                    data: {
                        token: token,
                    },
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.message === "success") {
                            let date = new Date();
                            date = date.toISOString().slice(0, 10);
                            // todaystatus(date, token);
                            todayteammembers(date, token);
                            attendanceSummary();
                            holidaysSummary();
                        }
                    },
                    error: function (xhr, status, error) {
                        deleteCookie('token');
                        window.location.href = '../login.php';
                    }
                });
            }
        }
       
    </script>
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
            <a href="../organization/organization.php"  class="sidenavbtn  sidebtnactive"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formsmain.html" class="sidenavbtn"><i class="bi bi-ui-radios"></i></a>
            <a href="../profile/profile.html" class="profileside"><i class="bi bi-person-fill"></i></a>
            <a href="../login.php"  class="powerside"><i class="bi bi-power"></i></a>
        </div>
    </div>
    <div id="mainarea">
        <div id="mobileheader">
            <a id="mobileprofile"><img src="/" alt="" /></a>
            <img src="../DarkLogo.png" alt="" id="mobilelogo" />
            <div id="mobile_topnav">
                <a href="../logout.php" style="color: red" class="mobile_navbtn"><i class="bi bi-power"></i></a>
                <span id="mobileLightDark" onclick="toggleTheme()" class="mobile_navbtn mobi"><i
                        class="bi bi-brightness-high-fill"></i></span>
            </div>
        </div>
        <span id="desktopDarkLightSwitch" style="cursor: pointer" onclick="toggleTheme()"><i
                class="bi bi-moon-fill"></i></span>
  <navbar>
   <div class="dropdown">
  <button class="dropbtn"><i class="fa-solid fa-circle-chevron-down"></i></button>
  <div class="dropdown-content">
    <a href="organization.php">Team Members</a>
    <a href="company details.html">Company Details</a>
    <a href="format settings.html">Format Settings</a>
  </div>
</div>
  </navbar>
  <main>
      <div class="main">
          <div class="main2">
              <div class="logo">
                  <i class="fa-solid fa-lock"></i>
              </div>
              <div class="h1">
                  <h1>Internal Only</h1>
                  <h4>Only Members Can See the Task</h4>
              </div>
              <div class="slider1">
                  <label class="switch">
        <input type="checkbox" id="toggleSwitch">
        <span class="slider"></span>
    </label>
              </div>
          </div>
          <div class="main2">
              <div class="logo">
                  <i class="fa-solid fa-compact-disc"></i>
              </div>
              <div class="h1">
                  <h1>Optional</h1>
                  <h4>Participants Can Skip This Task</h4>
              </div>
              <div class="slider1">
                  <label class="switch">
        <input type="checkbox" id="toggleSwitch">
        <span class="slider"></span>
    </label>
              </div>
          </div>
          <div class="main2">
              <div class="logo">
                  <i class="fa-solid fa-fan"></i>
              </div>
              <div class="h1">
                  <h1>Conditional Visibility</h1>
                  <h4>Hide or Show the task to 
                  other <br>Participants Too.</h4>
              </div>
              <div class="slider1">
                  <label class="switch">
        <input type="checkbox" id="toggleSwitch">
        <span class="slider"></span>
    </label>
              </div>
          </div>
      </div>
  </main>
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
                        "var(--text-color)"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#0325bd"
                    );
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
                    document.getElementById("sidebar_logo").src = "../WhiteLogo.png";
                    document.getElementById("mobilelogo").src = "../WhiteLogo.png";
                }
            }
document.getElementById('toggleSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Switch is ON');
    } else {
        console.log('Switch is OFF');
    }
});

</script>
    //teams.php
<?php
$servername = "srv544.hstgr.io";
$username = "u745359346_hrms_wdiaug_24";
$password = "WDI_HRMS_aug_24_calanjiyam#2024";
$dbname = "u745359346_hrms_wdiaug_24";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT teamId,name,email,description FROM teams WHERE teamId>1";
$result=mysqli_query($conn, $sql);
echo"<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Position</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo"<tr>
                        <td>".$row["teamId"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["description"]."</td>
                    </tr>";
}
?>
//interns.php

<?php
$servername = "srv544.hstgr.io";
$username = "u745359346_hrms_wdiaug_24";
$password = "WDI_HRMS_aug_24_calanjiyam#2024";
$dbname = "u745359346_hrms_wdiaug_24";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT empId,name,email,password,team,status FROM employees WHERE empId >'1'";
$result=mysqli_query($conn, $sql);
echo"<table><tr><th>empId</th><th>name</th><th>email</th><th>password</th><th>team</th><th>status</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo"<tr>
                        <td>".$row["empId"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["password"]."</td>
                        <td>".$row["team"]."</td>
                        <td>".$row["status"]."</td>
                    </tr>";
}
?>
//addemployee.html

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee Onboarding</title>
    <link rel="stylesheet" href="./Form.css">
    <style>
        body {
  font-family: Arial, sans-serif;
  /* background-color: #f4f7f8; */
  background-color: #666;
  background-position: center;
  color: #333;
  margin: 0;
  padding: 20px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 24px;
  margin-bottom: 40px;
  margin-top: 30px;
}

p {
  margin-bottom: 20px;
  color: #666;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 10px;
  margin: 5px 0 10px 0;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

.name-fields,
.address-fields {
  display: flex;
  gap: 10px;
}

input[type="text"],
input[type="tel"] {
  flex: 1;
}

button {
  background-color: #5a67d8;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #434190;
}
    
    </style>
</head>

<body>
    <div class="container">
        <h1>New Employee Onboarding</h1>
        <!-- <p>Hello! We are excited for your first day. Please help us prepare for your arrival by reviewing and addressing the questions below.</p> -->
        <form id="onboarding-form">
            <div class="form-group">
                <label for="firstName">Name</label>
                <div class="name-fields">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="position">Your Position</label>
                <input type="text" id="position" name="position" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="1234567890" required>
                <small>Please enter a valid phone number.</small>
            </div>
            <div class="form-group">
                <label fro="Email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Street Address" required>
                <input type="text" id="address2" name="address2" placeholder="Street Address Line 2">
                <div class="address-fields">
                    <input type="text" id="city" name="city" placeholder="City" required>
                    <input type="text" id="state" name="state" placeholder="State / Province" required>
                    <input type="text" id="zip" name="zip" placeholder="Postal / Zip Code" required>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="Form.js"></script>
</body>

</html>        
//companydetail.php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Calanjiyam Admin Portal</title>
  <style>
  
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");
/:root {
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


/*.sidebar{*/
/*    justify-content: space-evenly;*/
/*    position:absolute;*/
/*    background-color:white;*/
/*    width:150px;*/
/*    height:100vh;*/
/*}*/
.links{
    padding-top:5px;
}
.div2{
    padding-left:40px;
    padding-top:40px;
}
.container2{
    width:70vw;
    height:20vh;
     background-color: var(--background-color1);
    padding-left:150px;
    border:2px solid transparent;
border-radius:5%;
padding-left:20px;
margin-left:60px;
}
.head{
     border:2px solid transparent;
    border-radius:5%;
    display:block;
    box-shadow:#051094;
}
.user{
    display:flex;
    justify-content:space-between;
}
.user h1{
    font-weight:bolder;
    font-family: Helvetica, Arial, sans-serif;
}
.h2{
    font-weight:bold;
    font-family:"nunito", sans-serif;
}
.user button{
    margin-top:20px;
    width:100px;
    height:60px;
    background-color:#63C5DA;
    font-size:15px;
}
.user button a{
    text-decoration:none;
    color:black;
}
.user button a:hover{
    color:white;
}
.user button:hover{
    color:white;
    background-color:red;
}
#time {
    font-size: 1.5em;
}
.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}

#search-options {
    padding: 10px;
    font-size: 16px;
}

#search-input {
    padding: 10px;
    font-size: 16px;
    margin-left: 10px;
    margin-right: 10px;
    width: 300px;
}

.button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
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
            background-color: var(--background-color);
            margin-top: 5px;
            font-weight: 600;
            /* Change the text color */
            color: gray;
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
            background-color: transparent;
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
                margin-left:500px;
            }

            #mainarea {
                display: block;
                width: 96%;
                margin: auto;
                margin-top: 5px;
                margin-bottom: 100px;
                margin-left:500px;
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

#desktopDarkLightSwitch{
    margin-top:30px;
    display:var(--background-color);
    color:var(--text-color);
    margin-left:1400px;
    margin-top:20px;
    font-size:20px;
}
#desktopDarkLightSwitch:hover{
    background-color:white;
    color:var(--accent-color);
}
  </style>
  <style>
      @media (max-width: 767px){
      #sidebar{
        display: none;
      }
      #desktopDarkLightSwitch{
        display: none;
      }
}
.dropbtn {
 background-color: #B2FFFF;
  color: black;
 margin-left:1200px;
  font-size: 20px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: absolute;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:1200px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#004F98;
    color:white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn{background-color: #B2FFFF;}
/* Change the background color of the dropdown button when the dropdown content is shown */
    </style>
<style>
navbar{
    display:flex;
    padding-left:50px;
}
.mobi{
    margin-left:500px;
}
    </style>
<style>
navbar{
    display:flex;
    padding-left:50px;
}
.mobi{
    margin-left:500px;
}
#desktopDarkLightSwitch{
    margin-top:30px;
    display:var(--background-color);
    color:var(--text-color);
    margin-left:1400px;
    margin-top:20px;
    font-size:20px;
}
#desktopDarkLightSwitch:hover{
    background-color:white;
    color:var(--accent-color);
}
  </style>
  <style>
      @media (max-width: 767px){
      #sidebar{
        display: none;
      }
      #desktopDarkLightSwitch{
        display: none;
      }
}
  </style>
  </style>
 
<style>
.tree,
.tree ul,
.tree li {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
}
.tree {
    margin: 0 0 1em;
    text-align: center;
    margin-left:500px;
    margin-top:200px;
}
.tree,
.tree ul {
    display: table;
}
.tree ul {
    width: 100%;
}
.tree li {
    display: table-cell;
    padding: .5em 0;
    vertical-align: top;
}
.tree li:before {
    outline: solid 1px #666;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.tree li:first-child:before {
    left: 50%;
}
.tree li:last-child:before {
    right: 50%;
}
.tree code,
.tree span {
    border: solid .1em #666;
    border-radius: .2em;
    display: inline-block;
    margin: 0 .2em .5em;
    padding: .2em .5em;
    position: relative;
    background-color:cadetblue;
}
.tree ul:before,
.tree code:before,
.tree span:before {
    outline: solid 1px #666;
    content: "";
    height: .5em;
    left: 50%;
    position: absolute;
}
.tree ul:before {
    top: -.5em;
}
.tree code:before,
.tree span:before {
    top: -.55em;
}
.tree>li {
    margin-top: 0;
}
.tree>li:before,
.tree>li:after,
.tree>li>code:before,
.tree>li>span:before {
    outline: none;
}
.li{
margin-left:20px;
}
  </style>
  <style>
      @media (max-width: 767px){
      #sidebar{
        display: none;
      }
      #desktopDarkLightSwitch{
        display: none;
      }
}
  </style>
</head>
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

        function authorizeToken() {
            if (!getCookie('token')) {
                window.location.href = '../login.php';
            } else {
                let token = getCookie('token');
                $.ajax({
                    url: '../services/user/authorizeToken.php',
                    type: 'POST',
                    data: {
                        token: token,
                    },
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.message === "success") {
                            let date = new Date();
                            date = date.toISOString().slice(0, 10);
                            // console.log(response.name);
                            document.getElementById("username").innerHTML = response.name;
                            let loading = document.getElementById("loading");
                            loading = loading.cloneNode(true);
                            loading.id = "tdyaction_loading";
                            loading.style.display = "block";
                            document.getElementById("todayaction").innerHTML = '';
                            document.getElementById("todayaction").appendChild(loading);
                            document.getElementById("todayaction").style.pointerEvents = "none";
                            document.getElementById("todayaction").style.cursor = "no-drop";
                            todaystatus(date, token);
                            todayteammembers(date, token);
                            attendanceSummary();
                            holidaysSummary();
                        }
                    },
                    error: function (xhr, status, error) {
                        deleteCookie('token');
                        window.location.href = '../login.php';
                    }
                });
            }
        }

        function authorizeToken1() {
            if (!getCookie('token')) {
                window.location.href = '../login.php';
            } else {
                let token = getCookie('token');
                $.ajax({
                    url: '../services/user/authorizeToken.php',
                    type: 'POST',
                    data: {
                        token: token,
                    },
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.message === "success") {
                            let date = new Date();
                            date = date.toISOString().slice(0, 10);
                            // todaystatus(date, token);
                            todayteammembers(date, token);
                            attendanceSummary();
                            holidaysSummary();
                        }
                    },
                    error: function (xhr, status, error) {
                        deleteCookie('token');
                        window.location.href = '../login.php';
                    }
                });
            }
        }
       
    </script>



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
            <a href="../organization/organization.php"  class="sidenavbtn  sidebtnactive"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formsmain.html" class="sidenavbtn"><i class="bi bi-ui-radios"></i></a>
            <a href="../profile/profile.html" class="profileside"><i class="bi bi-person-fill"></i></a>
            <a href="../login.php"  class="powerside"><i class="bi bi-power"></i></a>
        </div>
    </div>
    <div id="mainarea">
        <div id="mobileheader">
            <a id="mobileprofile"><img src="/" alt="" /></a>
            <img src="../DarkLogo.png" alt="" id="mobilelogo" />
            <div id="mobile_topnav">
                <a href="../logout.php" style="color: red" class="mobile_navbtn"><i class="bi bi-power"></i></a>
                <span id="mobileLightDark" onclick="toggleTheme()" class="mobile_navbtn mobi"><i
                        class="bi bi-brightness-high-fill"></i></span>
            </div>
        </div>
        <span id="desktopDarkLightSwitch" style="cursor: pointer" onclick="toggleTheme()"><i
                class="bi bi-moon-fill"></i></span>


  <navbar>
   <div class="dropdown">
  <button class="dropbtn"><i class="fa-solid fa-circle-chevron-down"></i></button>
  <div class="dropdown-content">
      <a href="organization.php">Team Members</a>
    <a href="company details.html">Company Details</a>
    <a href="format settings.html">Format Settings</a>
  </div>
</div>
  </navbar>
  <main>
      <div>
   <ul class="tree">
        <li class="li"> <span>       CCT-Calanjiyam Consultancies & Technologies</span>
          <ul>
            <li> <span>About Us</span>
              <ul>
                <li> <span>CEO-XYZ</span>
                  <ul>
                    <li><span>Founder-XYZ</span></li>
                  </ul>
                </li>
                <li> <span>Our Managers</span>
                  <ul>
                    <li><span>Mathan Sir</span></li>
                    <li><span>XYZ</span></li>
                    <li><span>XYZ</span></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li> <span>Our Department</span>
              <ul>
                <li> <span>IT</span>
                  <ul>
                    <li><span>Manager-</span></li>
                  </ul>
                </li>
                <li> <span>HR Department</span>
                  <ul>
                    <li><span>Manager(HR)</span></li>
                  </ul>
                </li>
              </ul>
            </li>
            </li>
          </ul>
        </li>
      </ul>  
      </div>
  </main>
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
                        "var(--text-color)"
                    );
                    document.documentElement.style.setProperty(
                        "--accent-color",
                        "#0325bd"
                    );
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
                    document.getElementById("sidebar_logo").src = "../WhiteLogo.png";
                    document.getElementById("mobilelogo").src = "../WhiteLogo.png";
                }
            }
</script>
</body>
</html>   

//editdetail.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details Form</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Your Details </h2>
        <form id="DetailsForm" action="submit_leave.php" method="POST">
            <label for="employee_name">Name:</label>
            <input type="text" id="employee_name" name="employee_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>

            <label for="Contact no">Contact No:</label>
            <input type="Contact No" id="Contact No" name="Contact No" required>
            
             <label for="Skills">Skills:</label>
            <input type="Skills" id="Skills" name="Skills" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('DeatailsForm').addEventListener('submit', function(e) {
        e.preventDefault();  // Stop form submission
    });

    </script>
    <!--<script src="script.js"></script>-->
</body>
</html>
            
     
