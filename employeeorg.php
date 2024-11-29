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
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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


.sidebar{
    justify-content: space-evenly;
    position:absolute;
    background-color:white;
    width:150px;
    height:100vh;
}
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
    background-color:var(--background-color1);
    font-size:15px;
}
.user button a{
    text-decoration:none;
    color:var(--text-color);
}
/*.user button a:hover{*/
/*    color:var(--background-color1);*/
/*}*/
/*.user button:hover{*/
/*    color:white;*/
/*    background-color:var(--background-color);*/
/*}*/
#time {
    font-size: 1.5em;
}
.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px; 
     border-radius: 5px;
            margin-right: 10px;
            /*background-color: var(--background-color1);*/
            color: var(--text-color);
}
#select-options {
    padding: 10px;
    font-size: 16px;
   border-radius: 5px;
            margin-right: 10px;
            background-color: var(--background-color1);
            color: var(--text-color);
}
#search-input {
    padding: 10px;
    font-size: 16px;
    margin-left: 10px;
    margin-right: 10px;
    width: 300px;
    border-radius: 5px;
            margin-right: 10px;
            background-color: var(--background-color1);
            color: var(--text-color);
}
.color{
    color:var(--text-color);
}
.button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
   color: var(--text-color);
            background-color: var(--background-color1);
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
                position:absolute;
            }

            /*#mobileheader {*/
            /*    display: grid;*/
            /*    grid-template-columns: 33% 33% 33%;*/
            /*}*/

            #mainarea {
                display: block;
                width: 80%;
                margin: auto;
                margin-top: 5px;
                margin-bottom: 100px;
            }
.dropbtn {
 background-color: #B2FFFF;
  color: black;
 margin-left:500px;
  font-size: 20px;
  border: none;
}
        }
@media and screen  (max-width:1000px){
    #sidebar{
        position:absolute;
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
  background-color: var(background-color1);
  color:var(--text-color);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:1200px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: var(--text-color);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#004F98;
    color:;
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
/* Default styles for desktop */
.container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.search-bar {
  width: 50%;
}

.add-user {
  width: 20%;
}

/* Styles for mobile screens */
@media only screen and (max-width: 768px) {
  #sidebar{
      width:20vw;
      height:200vh;
  }
  .container2{
    width:70vw;
    height:20vh;
     background-color: var(--background-color1);
    padding-left:550px;
    border:2px solid transparent;
border-radius:5%;
padding-left:20px;
margin-left:260px;
}
.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px; 
     border-radius: 5px;
            margin-left: 400px;
            /*background-color: var(--background-color1);*/
            color: var(--text-color);
}

}

  </style>
  <style>
      .container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(3, 1fr);
  }
  
  .header {
    grid-column: span 3;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .card {
    background: var(--background-color1);
    color:var(--text-color);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .card2{
       background: var(--background-color1);
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }
  .card4{
      background: var(--background-color1);
    color:var(--text-color);
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .employee-card {
    grid-column: span 2;
    height: 270px;
  }
  
  .contract-card {
    height: 320px;
    display:block;
  }
  
  .agreement-card,
  .end-contract-card,
  .payment-card {
    height: 180px;
  }

  .input-box {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
    width: 100%;
  }

  .status {
    color: green;
    font-weight: bold;
  }

  .section-title {
    font-weight: bold;
  }
  .end-contract-card {
  height: 320px; 
  width: 400px;
  padding-left:20px;

}
.empcard{
    background-color:var(--background-color1);
    height:320px;
     border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-top:5px;
}
.payment-card {
  height: 370px; /* Increased height */
}
.mail{
    justify-content:space-between;
    display:flex;
}
.head{
    padding-top:20px;
    display:flex;
    justify-content:space-between;
}
.head2{
     display:flex;
    justify-content:space-evenly;
}
.head2 h6{
    padding-left:35px;
}
.head3{
    display:flex;
    
}
.head3 h6{
    padding-right:35px;
}
.head4{
    display:flex;
}
.head4 h6{
    padding-left:40px;
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
            <a href="../peers/peers.php" class="sidenavbtn"><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php"  class="sidenavbtn  sidebtnactive"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms/formmain.php" class="sidenavbtn"><i class="bi bi-ui-radios"></i></a>
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
</style>
</head>
<body>
<div class="container">
  <div class="header">Employee info</div>
  
  <div class="card  employee-card">
   <h1>👤 Employee</h1>
    <p><strong>ABCD</strong><br>abcd@gmail.com</p>
    <p>Work status: <span class="status">.invited</span></p>
    <p>Job Role: <strong>Web Intern</strong></p>
    <p>Employee Id: <strong>XXXXXXXXXXX</strong></p>
  </div>
  
  <div class="empcard">
      <h2 style="font-size:30px" style="font-weight:bolder">Team Members information</h2>
      <h4>Shilpa khajure<br>shilpakhajure.cct@gmail.com</h4>
      <h4>Mayuri Gupta<br>mayurigupta.cct@gmail.com</h4>
      <h4>Boddepalli Bhanu Prakash<br>bhanuprakashboddepalli.cct@gmail.com</h4>
      <h4>Varad Vishwas Dongare<br>varad.cct@gmail.com</h4>
  </div>
  <div class="card2 contract-card">
    <h2  style="font-size:30px"  style="font-weight:bolder">Organization and Project Details:-</h2>
    <div class="head">
        <h5 style="font-weight:bolder">Organization Name:-</h5>
   <h6 style="color:var(--accent-color)">Calanjiyam Consultancies and Technologies</h6>
    </div>
  <div class="head2">
       <h5 style="font-weight:bolder">Project  Name :-</h5>
   <h6 style="color:var(--accent-color)">HRMS(human resource management system</h6>
  </div>
  <div class="head3">
        <h5 style="font-weight:bolder">Official Email :-</h5>
   <h6 style="color:var(--accent-color)">hr@calanjiyam.com</h6>
    </div>
    <div class="head4">
        <h5 style="font-weight:bolder">Manager:-</h5>
   <h6 style="color:var(--accent-color)">Kishore Mukherjee<br>(kishoremukherjee.cct@gmail.com)</h6>
    </div>
  </div>
  
  <div class="card4 end-contract-card">
     <h2  style="font-size:30px"  style="font-weight:bolder">Project End Date:-</h2>
    <p>End Date Project</p>
    <input type="date" class="input-box" value="2027-08-09">
    <p>Notice Period</p>
    <input style="background-color:var(--background-color1)" type="text" class="input-box" placeholder="Last 10 days">
  </div>
</div>
</body>
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
</html>
