//for attendance and homepage authentication


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
        background: var(--background-color1); /* Set the background color of the scrollbar track */
        }
        
        ::-webkit-scrollbar-thumb {
        background-color: #555555; /* Set the color of the scrollbar thumb */
        border-radius: 4px; /* Set the border radius of the scrollbar thumb */
        }
        
        ::-webkit-scrollbar-thumb:hover {
        background-color: #6d2cef; /* Set the color of the scrollbar thumb on hover */
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

      input {
          display: block;
          width: 80%;
          margin: auto;
          margin-bottom: 20px;
          padding: 10px;
          border: 0px solid transparent;
          border-radius: 10px;
          color: #1c202b;
          background-color: #f0f1f6;
          animation: slideIn 1.5s forwards;
      }

      input::placeholder {
          color: rgb(119, 119, 119);
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
          border-color: #1c202b;
          /* Change the background color */
          background-color: var(--background-color);
          margin-top: 5px;
          font-weight: 600;
          /* Change the text color */
          color: gray;
      }

      button {
          display: block;
          min-width: 100px;
          height: 30px;
          margin: auto;
          padding: 5px;
          border: 0px solid transparent;
          border-radius: 20px;
          font-size: 12px;
          font-family: "nunito", sans-serif;
          color: var(--text-color);
          background-color: #0325bd;
          animation: wipeIn 1s forwards;
      }

      button:hover {
          cursor: pointer;
          background-color: transparent;
          color: var(--text-color);
          border: 2px solid #0325bd;
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
          vertical-align: middle;
          text-decoration: none;
          text-align: middle;
          vertical-align: middle;
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
          vertical-align: middle;
      }

      .mobile_navbtn {
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

      #bottomnav {
          display: none;
      }

      .bottomnavbtn {
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

      .bottomnavbtn:hover {
          color: var(--text-color);
          background-color: #0325bd;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .bottomnavbtnactive {
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
          }

          #mainarea {
              display: block;
              width: 96%;
              margin: auto;
              margin-top: 5px;
              margin-bottom: 100px;
          }

          #bottomnav {
              display: grid;
              grid-template-columns: 20% 20% 20% 20% 20%;
              position: fixed;
              bottom: 0;
              height: 80px;
              width: 100%;
              background-color: var(--background-color1);
              animation: slideUp 1s forwards;
          }

          #desktopDarkLightSwitch {
              display: none;
          }
      }
    </style>
    <style>
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
    </style>
    <style>
        @media (max-width: 767px){
            #dashboardgrid{
                display: block;
                grid-template-columns: repeat(1, 100%);
                width: 100%;
                margin: auto;
                padding-bottom: 100px;
            }
            .dashboardcol{
                display: block;
                width: 96%;
                margin: auto;
            }
            #pagetitle{
                display: block;
                width: 100%;
            }
            #pagetitle span{
                display: block;
                width: 100%;
                padding: 5px;
                text-align: center;
            }
            #MonthLeaveSummary{
                margin-top: 10px;
            }
        }
    </style>
    <style>
      /* CSS */
      .calendar {
          display: grid;
          grid-template-columns: repeat(7, 1fr);
          /* margin: auto; */
          border-collapse: collapse;
          animation: Wipecalendar 1s forwards;
      }

      @keyframes Wipecalendar {
          0% {
              width: 0%;
              opacity: 0;
          }

          50% {
              opacity: 0.2;
          }

          100% {
              width: 100%;
              opacity: 1;
          }
      }

      .day {
          margin: 5px;
          width: 35px;
          padding: 5px;
          font-size: 15px;
          text-align: center;
          border-radius: 100%;
          cursor: pointer;
          animation: fadeDay 1s forwards;
      }

      .day:hover {
          background-color: var(--text-color);
          color: var(--background-color);
      }

      .weekday {
          margin: 5px;
          width: 35px;
          padding: 5px;
          font-size: 15px;
          text-align: center;
          border-radius: 100%;
          animation: fadeDay 1s forwards;
      }

      @keyframes fadeDay {
          0% {
              font-size: 8px;
              opacity: 0;
          }

          100% {
              font-size: 15px;
              opacity: 1;
          }
      }

      .togglemonth {
          font-size: 14px;
          color: var(--text-color);
          cursor: pointer;
          text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .togglemonth:hover {
          color: var(--accent-color);
      }

      .today {
          background-color: var(--accent-color);
          color: white;
      }

      .onleave {
          background-color: red;
          color: white;
      }

      .holiday {
          background-color: #ffa500;
          color: white;
      }

      #DaySummary{
        display: block;
        width: 98%;
        min-height: 100px;
        margin: auto;
        margin-bottom: 10px;
        background-color: var(--background-color1);
        color: var(--text-color);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        animation: wipeboxtdy 1s forwards;
      }

      #DaySummaryWeekday{
        display: inline-block;
        text-align: center;
      }

        @keyframes DaySummarySpan {
            0% {
                font-size: 2px;
                opacity: 0;
            }

            100% {
                font-size: 14px;
                opacity: 1;
            }
        }

      #DaySummary span {
        display: inline-block;
        padding: 10px;
        width: 30%;
        text-align: center;
      }

      #DaySummaryDate, #DaySummaryWeekday, #DaySummaryStatus{
        display: inline-block;
        padding: 10px;
        width: 30%;
        /* font-size: 14px; */
        animation: DaySummarySpan 1s forwards;
      }

      .present{
        display: inline-block;
        float: right;
        margin: 10px;
        margin-top: 5px;
        background-color: green;
        color: white;
        /*make this important */
        padding: 5px !important;
        font-size: 12px !important;
        border-radius: 10px;
      }

      .absent{
        display: inline-block;
        float: right;
        margin: 10px;
        margin-top: 5px;
        background-color: red;
        color: white;
        /*make this important */
        padding: 5px !important;
        font-size: 12px !important;
        border-radius: 10px;
      }

        .future{
        display: inline-block;
        float: right;
        margin: 10px;
        margin-top: 5px;
        background-color: #6d2cef;
        color: white;
        /*make this important */
        padding: 5px !important;
        font-size: 12px !important;
        border-radius: 10px;
        }

      .leaverequested{
        display: inline-block;
        float: right;
        margin: 10px;
        margin-top: 5px;
        background-color: orange;
        color: white;
        /*make this important */
        padding: 5px !important;
        font-size: 12px !important;
        border-radius: 10px;
      }

      .leaveapproved{
        display: inline-block;
        float: right;
        margin: 10px;
        margin-top: 5px;
        background-color: yellow;
        color: red;
        /*make this important */
        padding: 5px !important;
        font-size: 12px !important;
        border-radius: 10px;
      }

      #DaySummaryTimeSpent{
        display: block;
        width: 100%;
        margin: auto;
        padding: 5px;
        padding-left: 10px;
        text-align: center;
        animation: wipeboxtdy 2s forwards;
      }

        @keyframes DaySummaryClockRow {
            0% {
                font-size: 2px;
                opacity: 0;
            }

            100% {
                font-size: 12px;
                opacity: 1;
            }
        }
        .DaySummaryClockRow span{
            /* font-size: 12px !important; */
            width: 33.33% !important;
            margin: auto;
            text-align: left;
            animation: DaySummaryClockRow 1s forwards;
        }
        .DaySummaryClockin i{
            color: green;
        }
        .DaySummaryClockout i{
            color: red;
        }
        .DaySummaryDuration i{
            color: var(--accent-color);
        }

        #MonthPercentage{
            display: block;
            width: 98%;
            min-height: 100px;
            margin: auto;
            padding: 5px;
            background-color: var(--background-color1);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: wipeboxtdy 1s forwards;
        }
        @keyframes monthcharttextanimate {
            0% {
                font-size: 2px;
                opacity: 0;
            }

            100% {
                font-size: 20px;
                opacity: 1;
            }
        }
        .monthcharttext{
            display: inline-block;
            animation: monthcharttextanimate 1s forwards;
        }
        #MonthPercentageMonth{
            display: inline-block;
            margin: auto;
            padding: 5px;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
        }
        #MonthPercentageCircle {
            display: block;
            width: 200px;
            height: 200px;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 50%;
            /* background-color: var(--background-color); */
        }
        #MonthSummaryStatsTable1,#MonthSummaryStatsTable2{
            width: 98%;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            border-collapse: collapse;
            background-color: var(--background-color);
        }
        #MonthSummaryStatsTable1 th{
            color: var(--accent-color);
            font-weight: 500;
            font-size: 16px;
            text-align: center;
            border: 1px solid var(--background-color1);
        }
        #MonthSummaryStatsTable1 td{
            color: var(--text-color);
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        #MonthSummaryStatsTable2 th{
            color: var(--accent-color);
            font-weight: 500;
            font-size: 16px;
            text-align: center;
            border: 1px solid var(--background-color1);
        }
        #MonthSummaryStatsTable2 td{
            color: var(--text-color);
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        #MonthLeaveSummary{
            display: block;
            width: 98%;
            margin: auto;
            /* margin-top: 10px; */
            margin-bottom: 10px;
            border-radius: 10px;
            border-collapse: collapse;
            background-color: var(--background-color1);
            animation: wipeboxtdy 1s forwards;
        }
        #MonthLeaveSummary h3{
            text-align: center;
            color: var(--text-color);
            padding: 5px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: monthcharttextanimate 1s forwards;
        }
        @media(max-width: 767px){
            #MonthLeaveSummary{
                margin-top: 10px !important;
            }
        }
        @Keyframes leavecardanimate {
            0% {
                font-size: 2px;
                opacity: 0;
            }
            100%{
                font-size: 14px;
                opacity: 1;
            }
        }
        .leavecard{
            display: block;
            width: 96%;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 10px;
            border-collapse: collapse;
            background-color: var(--background-color1);
            animation: leavecardanimate 1s forwards;
        }
        .leavecard:hover{
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .leavecard span{
            display: inline-block;
            padding: 5px;
            font-size: 12px !important;
            color: var(--text-color);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: leavecardanimate 1s forwards;
        }
        .leavecardTitle{
            margin: 0px;
            padding: 5px;
            font-size: 14px;
        }
        .leavecardStatus,.leavecardType{
            padding-right: 10px !important;
            padding-left: 10px !important;
            font-size: 12px !important;
            text-align: center;
            border-radius: 10px;
        }
        .leavecardFrom,.leavecardTo,.leavecardDuration{
            color: gray !important;
        }
        .applied{
            color: yellow !important;
        }
        .approved{
            color: green !important;
        }
        .rejected{
            color: red !important;
        }
        .canceled{
            color: orange !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      //on window load check if the user is logged in by checking if the sessionStorage has token
      function setCookie(name, value, days) {
          var expires = "";
          if (days) {
              var date = new Date();
              date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
              expires = "; expires=" + date.toUTCString();
          }
          document.cookie = name + "=" + (value || "") + expires + "; path=/";
      }

      function getCookie(name) {
          var nameEQ = name + "=";
          var ca = document.cookie.split(";");
          for (var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) === " ") {
                  c = c.substring(1, c.length);
              }
              if (c.indexOf(nameEQ) === 0) {
                  return c.substring(nameEQ.length, c.length);
              }
          }
          return null;
      }

      function deleteCookie(name) {
          document.cookie =
              name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      }

      function authorizeToken() {
          if (!getCookie("token")) {
              window.location.href = "../login.php";
          } else {
              let token = getCookie("token");
              $.ajax({
                  url: "../services/user/authorizeToken.php",
                  type: "POST",
                  data: {
                      token: token,
                  },
                  success: function(response) {
                      response = JSON.parse(response);
                      if (response.message === "success") {
                          let date = new Date();
                          date = date.toISOString().slice(0, 10);
                          document.getElementById("username").innerHTML = response.name;
                      }
                  },
                  error: function(xhr, status, error) {
                      deleteCookie("token");
                      window.location.href = "../login.php";
                  },
              });
          }
      }

      function authorizeToken1() {
          if (!getCookie("token")) {
              window.location.href = "../login.php";
          } else {
              let token = getCookie("token");
              $.ajax({
                  url: "../services/user/authorizeToken.php",
                  type: "POST",
                  data: {
                      token: token,
                  },
                  success: function(response) {
                      response = JSON.parse(response);
                      if (response.message === "success") {
                          let date = new Date();
                          date = date.toISOString().slice(0, 10);
                      }
                  },
                  error: function(xhr, status, error) {
                      deleteCookie("token");
                      window.location.href = "../login.php";
                  },
              });
          }
      }
      // create a function that will be recursed every 30 seconds to call the todaystatus(date, token) and todayteammembers(date, token);
      setInterval(authorizeToken1, 30000);
    </script>
    <script>
      // create a function to calculate the greeting based on the time of the day as 'Good morning', 'Good afternoon', or 'Good evening' and display it inside the #greeting
      function greeting() {
          const date = new Date();
          const hours = date.getHours();

          let greetingText;

          if (hours >= 5 && hours < 12) {
              greetingText = "Good morning!";
          } else if (hours >= 12 && hours < 18) {
              greetingText = "Good afternoon!";
          } else {
              greetingText = "Good evening!";
          }
          console.log(greetingText);
      }
      // get today's date in IST and format it as a string with 'day' 'month in 3 letters' 'year', 'day of the week'
      function getTodaysDate() {
          const date = new Date();
          const options = {
              weekday: "long",
              year: "numeric",
              month: "long",
              day: "numeric",
          };
          const formattedDate = date.toLocaleDateString("en-US", options);
          console.log(formattedDate);
      }
      </script>
      <script>
      // JavaScript
      document.addEventListener("DOMContentLoaded", function() {
          const calendar = document.querySelector(".calendar");

          if (calendar) {
              const today = new Date();
              const currentMonth = today.getMonth();
              const currentYear = today.getFullYear();

              const daysInMonth = new Date(
                  currentYear,
                  currentMonth + 1,
                  0
              ).getDate();
              const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();

              const monthNames = [
                  "January",
                  "February",
                  "March",
                  "April",
                  "May",
                  "June",
                  "July",
                  "August",
                  "September",
                  "October",
                  "November",
                  "December",
              ];

              let daysinweek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

              let monthhead = monthNames[currentMonth] + " " + currentYear;
              document.querySelector("#monthlycalendar_month").innerHTML =
                  monthhead;

              for (let i = 1; i <= 7; i++) {
                  calendar.innerHTML += `<div class="weekday">${
                daysinweek[i - 1]
              }</div>`;
              }

              for (let i = 0; i < firstDayIndex; i++) {
                  calendar.innerHTML += `<div class="day"></div>`;
              }

              for (let i = 1; i <= daysInMonth; i++) {
                  //save the day in YYYY-MM-DD format
                  let month = (currentMonth + 1).toString().padStart(2, '0');
                  let day = i.toString().padStart(2, '0');
                  let thisDate = `${currentYear}-${month}-${day}`;
                  if (
                      i === today.getDate() &&
                      currentMonth === today.getMonth() &&
                      currentYear === today.getFullYear()
                  ) {
                      calendar.innerHTML +=
                          `<div onclick="viewAttendance(this, '${thisDate}')" class="day today">${i}</div>`;
                      viewTodayAttendance(thisDate);
                      monthsummary(thisDate);
                      monthregularize(thisDate);
                  } else {
                      calendar.innerHTML +=
                          `<div onclick="viewAttendance(this, '${thisDate}')" class="day">${i}</div>`;
                  }
              }
              //calculate prev month and next month
              const prevMonth = currentMonth === 0 ? 11 : currentMonth - 1;
              const prevYear = currentMonth === 0 ? currentYear - 1 : currentYear;

              const nextMonth = currentMonth === 11 ? 0 : currentMonth + 1;
              const nextYear = currentMonth === 11 ? currentYear + 1 : currentYear;

              //add an onlick event to the prev month button #prevMonth that triggers the prevMonth function and the next month button #nextMonth that triggers the nextMonth function
              document.querySelector("#prevMonth").addEventListener("click", () => {
                  Monthdisplay(prevMonth, prevYear);
              });
              document.querySelector("#nextMonth").addEventListener("click", () => {
                  Monthdisplay(nextMonth, nextYear);
              });
          } else {
              console.error("Element with class 'calendar' not found.");
          }
      });

      function Monthdisplay(newMonth, newYear) {
          const today = new Date();
          const calendar = document.querySelector(".calendar");
          calendar.innerHTML = "";
          const currentMonth = newMonth;
          const currentYear = newYear;
          const daysInMonth = new Date(
              currentYear,
              currentMonth + 1,
              0
          ).getDate();
          const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();

          const monthNames = [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
          ];

          let daysinweek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

          let monthhead = monthNames[currentMonth] + " " + currentYear;
          document.querySelector("#monthlycalendar_month").innerHTML = monthhead;

          for (let i = 1; i <= 7; i++) {
              calendar.innerHTML += `<div class="weekday">${
              daysinweek[i - 1]
            }</div>`;
          }

          for (let i = 0; i < firstDayIndex; i++) {
              calendar.innerHTML += `<div class="day"></div>`;
          }

          for (let i = 1; i <= daysInMonth; i++) {
              //save the day in YYYY-MM-DD format
              let month = (currentMonth + 1).toString().padStart(2, '0');
              let day = i.toString().padStart(2, '0');
              let thisDate = `${currentYear}-${month}-${day}`;
              if (
                  i === today.getDate() &&
                  currentMonth === today.getMonth() &&
                  currentYear === today.getFullYear()
              ) {
                  calendar.innerHTML += `<div onclick="viewAttendance(this, '${thisDate}')" class="day today">${i}</div>`;
                viewTodayAttendance(thisDate);
              } else {
                  calendar.innerHTML += `<div onclick="viewAttendance(this, '${thisDate}')" class="day">${i}</div>`;
              }
          }
          //get the last date from the daysInMonth in YYYY-MM-DD
          let lastDate = `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${daysInMonth.toString().padStart(2, '0')}`;
          monthsummary(lastDate);
          monthregularize(lastDate);

          //calculate prev month and next month
          const prevMonth = currentMonth === 0 ? 11 : currentMonth - 1;
          const prevYear = currentMonth === 0 ? currentYear - 1 : currentYear;

          const nextMonth = currentMonth === 11 ? 0 : currentMonth + 1;
          const nextYear = currentMonth === 11 ? currentYear + 1 : currentYear;

          //add an onlick event to the prev month button #prevMonth that triggers the prevMonth function and the next month button #nextMonth that triggers the nextMonth function
          document.querySelector("#prevMonth").addEventListener("click", () => {
              Monthdisplay(prevMonth, prevYear);
          });
          document.querySelector("#nextMonth").addEventListener("click", () => {
              Monthdisplay(nextMonth, nextYear);
          });
      }

      function viewTodayAttendance(adate) {
          console.log(adate);
          // Reset the style of all days
          document.querySelectorAll('.day').forEach(day => {
              day.style.backgroundColor = ''; // Reset the background color
              day.style.color = ''; // Reset the color
          });
          //assign the adate as inner HTML to #DaySummaryDate
          document.querySelector("#DaySummaryDate").innerHTML = adate;
          let token = getCookie('token');
          //send ajax to get the summary of the day
          $.ajax({
              type: "POST",
              url: "../services/user/attendance/todaystatus.php",
              data: {
                token: token,
                date: adate
              },
              success: function(response) {
                response = JSON.parse(response);
                console.log(response);
                //get the day of the week for adate
                let newday = new Date(adate).getDay();
                let weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                let dayOfWeek = weekdays[newday];
                //add the day of the week to #DaySummaryWeekday
                document.querySelector("#DaySummaryWeekday").innerHTML = dayOfWeek;
                let status = response.message;
                document.querySelector("#DaySummaryTimeSpent").innerHTML = "00:00:00" +" Hours";
                if(response.message === "not in yet"){
                    status = "absent";
                }
                if(response.clockin){
                  let clockin = response.clockin;
                  let clockout = response.clockout;
                  if(clockout[clockout.length - 1] === ''){
                    clockout.pop();
                  }
                  // console.log(clockin, clockout);
                  let totalDuration = calculateTimeSpent(clockin, clockout);
                  //conver the total duration to hours, minutes and seconds
                  let timespent = `${Math.floor(totalDuration / 3600)}:${Math.floor((totalDuration % 3600) / 60)}:${totalDuration % 60}`;
                  // console.log(totalDuration);
                  console.log(timespent);
                  //add the timespent to #DaySummaryTimeSpent
                  document.querySelector("#DaySummaryTimeSpent").innerHTML = timespent +" Hours";
                }
                document.querySelector("#DaySummaryStatus").innerHTML = "#"+status;
                //remove all classes from #DaySummaryStatus
                document.querySelector("#DaySummaryStatus").classList.remove("present");
                document.querySelector("#DaySummaryStatus").classList.remove("absent");
                document.querySelector("#DaySummaryStatus").classList.remove("leaverequested");
                document.querySelector("#DaySummaryStatus").classList.remove("leaveapproved");
                document.querySelector("#DaySummaryStatus").classList.add(status);
              }
          });
        }

      function viewAttendance(e, adate) {
          console.log(adate);
          // Reset the style of all days
          document.querySelectorAll('.day').forEach(day => {
              day.style.backgroundColor = ''; // Reset the background color
              day.style.color = ''; // Reset the color
          });
          e.style.backgroundColor = "var(--text-color)";
          e.style.color = "var(--background-color)";
          //assign the adate as inner HTML to #DaySummaryDate
          document.querySelector("#DaySummaryDate").innerHTML = adate;
          let token = getCookie('token');
          //send ajax to get the summary of the day
          $.ajax({
              type: "POST",
              url: "../services/user/attendance/todaystatus.php",
              data: {
                token: token,
                date: adate
              },
              success: function(response) {
                response = JSON.parse(response);
                console.log(response);
                //get the day of the week for adate
                let newday = new Date(adate).getDay();
                let weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                let dayOfWeek = weekdays[newday];
                //add the day of the week to #DaySummaryWeekday
                document.querySelector("#DaySummaryWeekday").innerHTML = dayOfWeek;
                let status = response.message;
                document.querySelector("#DaySummaryTimeSpent").innerHTML = "00:00:00" +" Hours";
                document.getElementById("DaySummaryClocks").innerHTML = "";
                if(response.message === "not in yet"){
                  //check if the date is from the future
                  let date = new Date();
                  let today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
                  adate = new Date(adate);
                  if(adate > today){
                    status = "future";
                  }
                  else{
                    status = "absent";
                  }
                  console.log("For future dates, status is: "+status);
                }
                if(response.clockin){
                  let clockin = response.clockin;
                  let clockout = response.clockout;
                  if(clockout[clockout.length - 1] === ''){
                    clockout.pop();
                  }
                  // console.log(clockin, clockout);
                  let totalDuration = calculateTimeSpent(clockin, clockout);
                  //conver the total duration to hours, minutes and seconds
                  let timespent = `${(Math.floor(totalDuration  / 3600) + '').padStart(2, '0')}:${(Math.floor((totalDuration  % 3600) / 60) + '').padStart(2, '0')}:${(totalDuration  % 60 + '').padStart(2, '0')}`;
                  // console.log(totalDuration);
                  console.log(timespent);
                  //add the timespent to #DaySummaryTimeSpent
                  document.querySelector("#DaySummaryTimeSpent").innerHTML = timespent +" Hours";
                }
                document.querySelector("#DaySummaryStatus").innerHTML = "#"+status;
                //remove all classes from #DaySummaryStatus
                document.querySelector("#DaySummaryStatus").classList.remove("present");
                document.querySelector("#DaySummaryStatus").classList.remove("absent");
                document.querySelector("#DaySummaryStatus").classList.remove("leaverequested");
                document.querySelector("#DaySummaryStatus").classList.remove("leaveapproved");
                document.querySelector("#DaySummaryStatus").classList.add(status);
              }
          });
        }

        function calculateTimeSpent(clockin, clockout) {
          const lastClockin = clockin[clockin.length - 1];
          const lastClockinSeconds = getTimeInSeconds(lastClockin);
          // console.log(lastClockin);
          let total = 0;
          if(clockout.length === 1 && clockout[0] === ''){
            //empty the clockout array
            clockout = [];
          }
          // console.log(clockout.length);
          for (let i = 0; i < clockout.length; i++) {
              const clockinSeconds = getTimeInSeconds(clockin[i]);
              const clockoutSeconds = getTimeInSeconds(clockout[i]);
              let thisduration;
              if (clockinSeconds <= clockoutSeconds) {
                 thisduration = clockoutSeconds - clockinSeconds;
                  total += (clockoutSeconds - clockinSeconds);
              } else {
                  thisduration = (lastClockinSeconds - clockinSeconds) + (clockoutSeconds - getTimeInSeconds(lastClockin));
                  total += (lastClockinSeconds - clockinSeconds) + (clockoutSeconds - getTimeInSeconds(lastClockin));
              }
            thisduration = `${(Math.floor(thisduration / 3600) + '').padStart(2, '0')}:${(Math.floor((thisduration % 3600) / 60) + '').padStart(2, '0')}:${(thisduration % 60 + '').padStart(2, '0')}`;
            // Create the following formatted elements
            // <div class="DaySummaryClockRow">
            let newDaySummaryClockRow = document.createElement("div");
            newDaySummaryClockRow.classList.add("DaySummaryClockRow");
            // <span class="DaySummaryClockin"><i class="bi bi-arrow-down-left-circle-fill"></i> 09:00:00 AM</span>
            let newDaySummaryClockin = document.createElement("span");
            newDaySummaryClockin.classList.add("DaySummaryClockin");
            newDaySummaryClockin.innerHTML = `<i class="bi bi-arrow-down-left-circle-fill"></i> ${clockin[i]}`;
            // <span class="DaySummaryClockout"><i class="bi bi-arrow-up-right-circle-fill"></i> 05:00:00 PM</span>
            let newDaySummaryClockout = document.createElement("span");
            newDaySummaryClockout.classList.add("DaySummaryClockout");
            newDaySummaryClockout.innerHTML = `<i class="bi bi-arrow-up-right-circle-fill"></i> ${clockout[i]}`;
            // <span class="DaySummaryDuration"><i class="bi bi-stopwatch"></i> 08:00:00 Hrs</span>
            let newDaySummaryDuration = document.createElement("span");
            newDaySummaryDuration.classList.add("DaySummaryDuration");
            newDaySummaryDuration.innerHTML = `<i class="bi bi-stopwatch"></i> ${thisduration} Hrs`;
            // Append the elements to #DaySummaryClocks
            document.querySelector("#DaySummaryClocks").appendChild(newDaySummaryClockRow);
            newDaySummaryClockRow.appendChild(newDaySummaryClockin);
            newDaySummaryClockRow.appendChild(newDaySummaryClockout);
            newDaySummaryClockRow.appendChild(newDaySummaryDuration);
            // console.log(clockin[i], clockout[i]);
          }
          if(clockout.length < clockin.length){
            //get the difference between last clockin and current time
            // let currentTime = new Date();
            // let currentSeconds = getTimeInSeconds(currentTime.toLocaleTimeString());
            // total += (currentSeconds - lastClockinSeconds);
            // console.log("current Time "+currentTime.toLocaleTimeString());
          }
          
          return total;
      }

      function getTimeInSeconds(time) {
          const [timeString, ampm] = time.split(' ');
          const [hours, minutes, seconds] = timeString.split(':');
      
          let hour = parseInt(hours, 10);
          const minute = parseInt(minutes, 10);
          const second = parseInt(seconds, 10);
      
          if (ampm === 'PM' && hour < 12) {
              hour += 12;
          }
      
          return hour * 3600 + minute * 60 + second;
      }
      function monthAvgWorkingHours(adate){
        // console.log(adate);
        let token = getCookie('token');
        let totalDuration = 0;
        //send ajax to get the summary of the day
        $.ajax({
            type: "POST",
            url: "../services/user/attendance/todaystatus.php",
            data: {
            token: token,
            date: adate
            },
            success: function(response) {
                response = JSON.parse(response);
                // console.log(response);
                //get the day of the week for adate
                let newday = new Date(adate).getDay();
                let weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                let dayOfWeek = weekdays[newday];
                //add the day of the week to #DaySummaryWeekday
                let status = response.message;
                if(response.message === "not in yet"){
                    status = "absent";
                }
                if(response.clockin){
                    let clockin = response.clockin;
                    let clockout = response.clockout;
                    if(clockout[clockout.length - 1] === ''){
                    clockout.pop();
                    }
                    // console.log(clockin, clockout);
                    totalDuration = calculateTimeSpent(clockin, clockout);
                }
            }
        });
        return totalDuration;
      }
      function monthsummary(adate){
        //get token from cookies
        let token = getCookie("token");
        $.ajax({
          type: "POST",
          url: "../services/user/attendance/monthsummary.php",
          data: {
            token: token,
            adate: adate
          },
          success: function (response) {
              response = JSON.parse(response);
              if(response.message === "success"){
                console.log(response);
                let recorded_dates = [];
                let recorded_data = response.data;
                let compute_data = [];
                let present = 0;
                let absent = 0;
                let leaveapproved = 0;
                let leaverequested = 0;
                //get all the dates in the recorded data in reverse order
                for(let i = recorded_data.length - 1; i >= 0; i--){
                    let radate = recorded_data[i].adate;
                    //check if the date is already in the recorded_dates array
                    if(!recorded_dates.includes(radate)){
                        recorded_dates.push(radate);
                        compute_data.push(recorded_data[i]);
                    }
                }
                // Get the month and year from the adate in YYYY-MM format
                let month = adate.substring(0, 7);
                let year = month.substring(0, 4);
                
                // Get all the dates in the month and year in an array called monthdates
                let monthdates = [];
                
                // Get the number of days in the month
                let daysInMonth = new Date(year, parseInt(month, 10) - 1, 0).getDate();
                console.log(daysInMonth);
                
                for (let i = 1; i <= daysInMonth; i++) {
                    //adjust i to have 0 for single digits
                    let dayiterator = i;
                    if (i < 10) {
                        dayiterator = `0${i}`;
                    }
                    let thisDate = `${month}-${dayiterator}`;
                    //get today's date in YYYY-MM-DD format
                    let today = new Date();
                    let todayDate = `${today.getFullYear()}-${(today.getMonth() + 1).toString().padStart(2, '0')}-${today.getDate().toString().padStart(2, '0')}`;
                    if (thisDate === todayDate) {
                        monthdates.push(thisDate);
                        break;
                    }
                    monthdates.push(thisDate);
                }
                console.log(monthdates);
                //compute the present, leaveapproved, leaverequested for each date through compute_data.status and if the date is not in the recorded_dates add it as absent
                for(let i = 0; i < monthdates.length; i++){
                    let iteratorDate = monthdates[i];
                    //check if the date is in the recorded_dates
                    if(recorded_dates.includes(iteratorDate)){
                        //check the status of the date in compute_data by filtering it out
                        let filteredData = compute_data.filter((data) => data.adate === iteratorDate);
                        let filteredDataStatus = filteredData[0].status;
                        if(filteredDataStatus === "present" || filteredDataStatus === "weekoff"){
                            console.log(iteratorDate + " " + "present");
                            present++;
                        } else if(filteredDataStatus === "leaveapproved"){
                            console.log(iteratorDate + " " + "leaveapproved");
                            leaveapproved++;
                        } else if(filteredDataStatus === "leaverequested"){
                            console.log(iteratorDate + " " + "leaverequested");
                            leaverequested++;
                        }
                    } else {
                        console.log(iteratorDate + " " + "absent");
                        absent++;
                    }
                }
                console.log("present "+present, "absent "+absent, "leaveapproved "+leaveapproved, "leaverequested "+leaverequested);
                let totalmonthdates = monthdates.length;
                console.log(totalmonthdates);
                let presentpercent = ((totalmonthdates-absent) / totalmonthdates) * 100;
                //presice to 2 decimal places
                presentpercent = presentpercent.toFixed(2);
                let absentpercent = (absent / totalmonthdates) * 100;
                //presice to 2 decimal places
                absentpercent = absentpercent.toFixed(2);
                console.log("presentpercent "+presentpercent, "absentpercent "+absentpercent);
                //modify the chart accordingly
                updateChartDataset(presentpercent);
                //get the month and year from the adate in MMM YYYY format
                let adateYear = adate.substring(0, 4);
                let adateMonth = adate.substring(5, 7);
                let adateMonthName = new Date(`${adateYear}-${adateMonth}-01`).toLocaleString('default', { month: 'long' });
                //update the #MonthPercentageMonth element with the month and year
                document.querySelector("#MonthPercentageMonth").innerHTML = `${adateMonthName} ${adateYear}`;
                //change the #MonthPercentageText text with the percentage
                document.querySelector("#MonthPercentageText").innerHTML = `${presentpercent} %`;
                //Update the #MonthSummaryStats through #MonthStasPresent, #MonthStasAbsent, #MonthStasLeaveApproved, #MonthStasLeaveRequested
                document.querySelector("#MonthStasPresent").innerHTML = present;
                document.querySelector("#MonthStatsAbsent").innerHTML = absent;
                document.querySelector("#MonthStatsLeaveApproved").innerHTML = leaveapproved;
            }
            else if(response.message === "Not Found"){
                //modify the chart to 0%
                updateChartDataset(0);
                //get the month and year from the adate in MMM YYYY format
                let adateYear = adate.substring(0, 4);
                let adateMonth = adate.substring(5, 7);
                let adateMonthName = new Date(`${adateYear}-${adateMonth}-01`).toLocaleString('default', { month: 'long' });
                //update the #MonthPercentageMonth element with the month and year
                document.querySelector("#MonthPercentageMonth").innerHTML = `${adateMonthName} ${adateYear}`;
                //change the #MonthPercentageText text with the percentage
                document.querySelector("#MonthPercentageText").innerHTML = `0.00 %`;
                //Update the #MonthSummaryStats through #MonthStasPresent, #MonthStasAbsent, #MonthStasLeaveApproved, #MonthStasLeaveRequested
                document.querySelector("#MonthStasPresent").innerHTML = "0";
                document.querySelector("#MonthStatsAbsent").innerHTML = "0";
                document.querySelector("#MonthStatsLeaveApproved").innerHTML = "0";
                document.querySelector("#MonthStatsAvgHrs").innerHTML = "0";
            }
          },
          error: function(xhr, status, error) {
            //modify the chart to 0%
            updateChartDataset(0);
            //get the month and year from the adate in MMM YYYY format
            let adateYear = adate.substring(0, 4);
            let adateMonth = adate.substring(5, 7);
            let adateMonthName = new Date(`${adateYear}-${adateMonth}-01`).toLocaleString('default', { month: 'long' });
            //update the #MonthPercentageMonth element with the month and year
            document.querySelector("#MonthPercentageMonth").innerHTML = `${adateMonthName} ${adateYear}`;
            //change the #MonthPercentageText text with the percentage
            document.querySelector("#MonthPercentageText").innerHTML = `0.00 %`;
            //Update the #MonthSummaryStats through #MonthStasPresent, #MonthStasAbsent, #MonthStasLeaveApproved, #MonthStasLeaveRequested
            document.querySelector("#MonthStasPresent").innerHTML = "0";
            document.querySelector("#MonthStatsAbsent").innerHTML = "0";
            document.querySelector("#MonthStatsLeaveApproved").innerHTML = "0";
            document.querySelector("#MonthStatsAvgHrs").innerHTML = "0";
          }
        })
      }

      function monthregularize(adate) {
          let token = getCookie("token");
          $.ajax({
              url: "../services/attendance/monthregularize.php",
              type: "POST",
              data: {
                  token: token,
                  adate: adate
              },
              success: function(response) {
                  response = JSON.parse(response);
                  if (response.message === "success") {
                      console.log("success");
                      let regularization = response.data;
                      let regCount = regularization.length;
                      document.querySelector("#MonthStatsRegularization").innerHTML = regCount;
                  }
              },
              error: function(xhr, status, error) {
                  console.log(error);
                  document.querySelector("#MonthStatsRegularization").innerHTML = "0";
              }
          })
      }

      function leaveRequests(){
          let token = getCookie("token");
          $.ajax({
              url: "../services/user/attendance/currentmonthLeaves.php",
              type: "POST",
              data: {
                  token: token
              },
              success: function(response) {
                  response = JSON.parse(response);
                  if (response.message === "success") {
                      console.log("success");
                      let leaves = response.leaves;
                      console.log( leaves);
                      //reverse the leaves array
                      leaves = leaves.reverse();
                      /* build the element 
                      <div class="leavecard">
                        <p class="leavecardTitle">Personal Leave</p>
                        <div>
                            <span class="leavecardType"><i class="bi bi-view-list"></i> Personal Leave</span>
                            <span class="leavecardStatus Approved">Approved</span>
                        </div>
                        <div>
                            <span class="leavecardFrom">27-05-2024</span>
                            <span style="color: gray;">to</span>
                            <span class="leavecardTo">28-05-2024</span>
                            <span style="color: gray;"><i class="bi bi-dot"></i></span>
                            <span class="leavecardDuration">2 Days</span>   
                        </div>
                    </div>
                    */
                   let LeaveCards = document.querySelector("#LeaveCards");
                   for (let i = 0; i < leaves.length && i<3; i++) {
                   //get startdate and enddate from the leaves[i] object with YYYY-MM-DD format
                   let startdate = leaves[i].startdate;
                   let enddate = leaves[i].enddate;
                   
                   //check if startdate is later than enddate
                   if (new Date(startdate) > new Date(enddate)) {
                       //swap startdate and enddate if necessary
                       let temp = startdate;
                       startdate = enddate;
                       enddate = temp;
                   }
                   
                   //calculate the duration in days
                   let duration = Math.ceil((new Date(enddate) - new Date(startdate))/(1000*60*60*24)) + " Days";
                    // console.log(startdate, enddate, duration);

                    console.log("Start Date: ", startdate, "End Date: ", enddate, "Duration: ", duration);
                    LeaveCards.innerHTML += `
                    <div class="leavecard">
                        <p class="leavecardTitle">${leaves[i].reason}</p>
                        <div>
                            <span class="leavecardType"><i class="bi bi-view-list"></i> ${leaves[i].ltype}</span>
                            <span class="leavecardStatus ${leaves[i].status}">${leaves[i].status}</span>
                        </div>
                        <div>
                            <span class="leavecardFrom">${leaves[i].startdate}</span>
                            <span style="color: gray;">to</span>
                            <span class="leavecardTo">${leaves[i].enddate}</span>
                            <span style="color: gray;"><i class="bi bi-dot"></i></span>
                            <span class="leavecardDuration">${duration}</span>   
                        </div>
                    </div>
                    `;
                   }
                  }
              },
              error: function(xhr, status, error) {
                  console.log(error);
              }
          })
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <a href="../attendance" class="sidenavbtn sidebtnactive"><i class="bi bi-calendar2-week-fill"></i></a>
            <a href="../peers/peers.php" class="sidenavbtn"><i class="bi bi-people-fill"></i></a>
            <a href="../organization/organization.php" class="sidenavbtn"><i class="bi bi-diagram-2-fill"></i></a>
            <a href="../forms" class="sidenavbtn"><i class="bi bi-ui-radios"></i></a>
            <a href="../profile" class="profileside"><i class="bi bi-person-fill"></i></a>
            <a href="../logout.php" class="powerside"><i class="bi bi-power"></i></a>
        </div>
    </div>
    <div id="mainarea">
        <div id="mobileheader">
            <a id="mobileprofile"><img src="../Karan Dharmalingam Potrait Photo.png" alt="" /></a>
            <img src="../DarkLogo.png" alt="" id="mobilelogo" />
            <div id="mobile_topnav">
                <a href="../logout.php" style="color: red" class="mobile_navbtn"><i class="bi bi-power"></i></a>
                <span id="mobileLightDark" onclick="toggleTheme()" class="mobile_navbtn"><i
                        class="bi bi-brightness-high-fill"></i></span>
            </div>
        </div>
        <h1 id="pagetitle">
            <span id="greetingtxt">Your attendance</span><span id="username">Karan Dharmalingam</span>
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
        <div id="dashboardgrid">
            <div class="dashboardcol" id="attedancecol">
                <div id="monthlycalendar">
                    <div id="DaySummary">
                      <span id="DaySummaryDate"></span>
                      <span id="DaySummaryWeekday">Weekday</span>
                      <span id="DaySummaryStatus"></span>
                      <p id="DaySummaryTimeSpent"></p>
                      <div id="DaySummaryClocks">
                        <!-- <div class="DaySummaryClockRow">
                            <span class="DaySummaryClockin"><i class="bi bi-arrow-down-left-circle-fill"></i> 09:00:00 AM</span>
                            <span class="DaySummaryClockout"><i class="bi bi-arrow-up-right-circle-fill"></i> 05:00:00 PM</span>
                            <span class="DaySummaryDuration"><i class="bi bi-stopwatch"></i> 08:00:00 Hrs</span>
                        </div> -->
                      </div>
                    </div>
                    <div id="monthheader" style="width: 100%">
                        <span class="togglemonth" id="prevMonth"><i class="bi bi-caret-left-fill"></i></span>
                        <span style="display: inline-block;width: calc(100% - 40px);text-align: center;" id="monthlycalendar_month"></span>
                        <span class="togglemonth" id="nextMonth"><i class="bi bi-caret-right-fill"></i></span>
                    </div>
                    <!-- HTML -->
                    <div class="calendar"></div>
                </div>
            </div>
            <div class="dashboardcol" id="monthcol">
                <div id="MonthPercentage">
                    <p style="width: 100%; text-align: center">
                        <span id="MonthPercentageMonth" class="monthcharttext"></span>
                        <span id="MonthPercentageText" class="monthcharttext"></span>
                    </p>
                    <div id="MonthPercentageCircle">
                        <canvas id="myChart" width="200" height="200"></canvas>
                        <script>
                            const ctx = document.getElementById('myChart').getContext('2d');
                            let myChart;
                            const updateChartDataset = (fillval) => {
                                let unfillval = 100 - fillval;
                                const root = document.documentElement;
                                const backgroundColor = getComputedStyle(root).getPropertyValue('--background-color').trim();

                                const data = {
                                    labels: ['Present', 'Absent'],
                                    datasets: [{
                                        data: [fillval, unfillval], // Example data for half-filled pie chart
                                        backgroundColor: ['#6d2cef', backgroundColor], // Using the CSS variable
                                        borderWidth: 0
                                    }]
                                };

                                const options = {
                                    plugins: {
                                        legend: {
                                            display: false,
                                            position: 'bottom'
                                        }
                                    }
                                };

                                if (myChart) {
                                    myChart.data = data;
                                    myChart.options = options;
                                    myChart.update();
                                } else {
                                    myChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: data,
                                        options: options
                                    });
                                }
                            };
                            // Update the chart when the CSS variable changes
                            const root = document.documentElement;
                            root.addEventListener('change', updateChartDataset);

                            // Initial chart creation
                            updateChartDataset(30);
                        </script>
                    </div>
                    <div id="MonthSummaryStats">
                        <table id="MonthSummaryStatsTable1">
                            <tr>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>On Leave</th>
                            </tr>
                            <tr>
                                <td id="MonthStasPresent"></td>
                                <td id="MonthStatsAbsent"></td>
                                <td id="MonthStatsLeaveApproved"></td>
                            </tr>
                        </table>
                        <table id="MonthSummaryStatsTable2">
                            <tr>
                                <th>Avg Working Hours</th>
                                <th>Regularized</th>
                            </tr>
                            <tr>
                                <td id="MonthStatsAvgHrs"></td>
                                <td id="MonthStatsRegularization"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="dashboardcol" id="organizationcol">
                <div id="MonthLeaveSummary">
                    <h3>Leave Summary</h3>
                    <div id="LeaveCards">
                        <!-- <div class="leavecard">
                            <p class="leavecardTitle">Personal Leave</p>
                            <div>
                                <span class="leavecardType"><i class="bi bi-view-list"></i> Personal Leave</span>
                                <span class="leavecardStatus Approved">Approved</span>
                            </div>
                            <div>
                                <span class="leavecardFrom">27-05-2024</span>
                                <span style="color: gray;">to</span>
                                <span class="leavecardTo">28-05-2024</span>
                                <span style="color: gray;"><i class="bi bi-dot"></i></span>
                                <span class="leavecardDuration">2 Days</span>   
                            </div>
                        </div> -->
                    </div>
                    <script>
                        leaveRequests();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="bottomnav">
        <a href="../dashboard" class="bottomnavbtn"><i class="bi bi-house-fill"></i></a>
        <a href="../attendance" class="bottomnavbtn bottomnavbtnactive"><i class="bi bi-calendar2-week-fill"></i></a>
        <a href="../peers" class="bottomnavbtn"><i class="bi bi-people-fill"></i></a>
        <a href="../organization" class="bottomnavbtn"><i class="bi bi-diagram-2-fill"></i></a>
        <a href="../forms" class="bottomnavbtn"><i class="bi bi-ui-radios"></i></a>
    </div>
    <script>
    getTodaysDate();
    greeting();
    authorizeToken();
    </script>
</body>

</html>
