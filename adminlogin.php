session_start();
$admin_email = "admin@calanjiyam.com";
$admin_password = "admin1212";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        header("Location: organization/organization.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Calanjiyam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://employee.crisscrosstamizh.in/logo.png" type="image/x-icon">
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

    body {
      display: flex;
      font-family: "nunito", sans-serif;
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f1f6;
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

    #login_area {
      display: grid;
      grid-template-columns: 50% 50%;
      width: 70%;
      min-width: 400px;
      height: 400px;
      margin: auto;
      justify-content: center;
      align-items: center;
      background-color: white;
      border-radius: 20px;
      animation: wipebox 1s forwards;
    }

    #bgimg_box {
      display: block;
      padding: 10px;
      width: 380px;
      height: 380px;
      animation: fadeIn 2s forwards;
    }

    #form_box {
      padding: 10px;
      width: 90%;
      margin: auto;
    }

    input {
      display: block;
      width: 80%;
      margin: auto;
      margin-bottom: 20px;
      padding: 10px;
      border: 0px solid transparent;
      border-radius: 10px;
      color: black;
      background-color: #f0f1f6;
      animation: slideIn 1.5s forwards;
    }

    input::placeholder {
      color: rgb(119, 119, 119);
    }

    input:focus {
      outline: none;
      background-color: #4a84cf;
      color: white;
    }

    input:focus::placeholder {
      color: rgb(218, 218, 218);
    }

    #login_title {
      font-family: "josefin sans", sans-serif;
      text-align: center;
      font-size: 20px;
      animation: slideIn 1.5s forwards;
    }

    .warning {
      color: red;
    }

    .warning_box {
      background-color: rgb(253, 143, 143);
      color: black;
    }

    .warning_box:focus {
      background-color: rgb(253, 143, 143);
    }

    .warning_box::placeholder {
      color: rgb(82, 82, 82);
    }

    button {
      display: block;
      width: 100px;
      height: 30px;
      margin: auto;
      padding: 5px;
      border: 0px solid transparent;
      border-radius: 20px;
      font-size: 12px;
      font-family: "nunito", sans-serif;
      color: white;
      background-color: #0325bd;
      animation: wipeIn 1s forwards;
    }

    button:hover {
      cursor: pointer;
      background-color: transparent;
      color: #0325bd;
      border: 2px solid #0325bd;
    }

    .show-hide-button {
      position: absolute;
      top: 10%;
      right: 35px;
      transform: translateY(-50%);
      background-color: transparent;
      color: #0325bd;
      border: none;
      width: auto;
      padding: 5px 10px;
      border: 0px solid transparent;
      border-radius: 100%;
      cursor: pointer;
      animation: slideIn 1.5s forwards;
    }

    .show-hide-button:hover {
      background-color: #0325bd;
      color: white;
    }
    #mobile_box{
      display: none;
    }

    #mobile_title{
      display: block;
      width: 90%;
      margin: auto;
      padding: 5px;
      line-height: 35px;
      text-align: center;
      font-size: 22px;
      font-weight: 500;
      font-family: 'josefin sans', sans-serif;
      text-decoration: none;
    }

    #mobile_txt_title{
      display: block;
      width: 150px;
      margin: auto;
      margin-top: 20px;
      padding: 5px;
      text-align: center;
      font-size: 18px;
      font-weight: 600;
      color: #0325bd;
    }

    @media (max-width: 767px) {
      body{
        background-image: url("Calanjiaym-HRPortal-mobile-body.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: bottom;
        background-color: white;
      }
      #login_area {
        display: block;
        width: 80%;
        height: auto;
        margin-top: 10px;
        background-color: transparent;
      }
      /* #mobile_box{
        display:block;
        width: 90%;
        margin:auto;
      }
      #mobile_img{
        display: block;
        width: 150px;
        margin: auto;
      }
      #form_box{
        margin-top: 20px;
      } */
      #bgimg_box{
        display: block;
        width: 300px;
        height: 300px;
        margin: auto;
      }
      #show-hide-button{
        margin-top: 0px;
      }
      button{
        width: 300px;
        margin-top: 20px;
      }
    }
  </style>
  <style>
    #loading {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #loading::after {
      content: "";
      display: block;
      width: 64px;
      height: 64px;
      margin: 0 auto;
      border-radius: 50%;
      border: 6px solid #f3f3f3;
      border-top-color: #3498db;
      animation: spin 1.5s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
  <style>

    .forgot {
      display: block;
      width: auto;
      margin: auto;
      margin-bottom: 10px;
      padding: 10px;
      color: #0325bd;
      font-size: 14px;
      border: 0px solid transparent;
      background-color: transparent;
      animation: slideIn 1.5s forwards;
    }

    .forgot:hover {
      cursor: pointer;
      color: #4a84cf;
      border: 0px solid transparent;
    }

    #forgot_form {
      display: none;
    }

    #otp_form {
      display: none;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
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
  <div id="login_area">
    <span id="loading">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </span>
    <div id="mobile_box">
      <img src="./DarkLogo.png" alt="" id="mobile_img">
      <p id="mobile_txt_title">HR Department</p>
      <h3 id="mobile_title">Calanjiyam Consultancies and Technologies</h3>
    </div>
    <img src="Calanjiaym-HRPortal.png" id="bgimg_box" alt="" />
    <div id="form_box">
      <form id="login_form" onsubmit="submitForm(event)" method="POST">
        <p id="login_title">Login to continue</p>
        <input type="email" name="email" id="email" required placeholder="Enter your email" required email="mayurigupta303@gmail.com" />
        <div style="position: relative;">
          <input type="password" name="password" id="password" required password="password"required placeholder="Enter your password" style="display: block; width: 80%; margin: auto; margin-bottom: 20px;" />
          <button type="button" id="show-hide-button" class="show-hide-button" onclick="togglePasswordVisibility()"><i class="bi bi-eye-fill"></i></button>
        </div>
        <button href="" id="forgot" type="button" class="forgot" onclick="forgotform()">Forgot Password?</button>
        <button type="submit" value="Login">Login</button>
      </form>
      <form id="forgot_form" onsubmit="submitForget(event)">
        <p id="forgot_title" style="text-align:center;">Enter email to get OTP</p>
        <input type="email" name="email" id="femail" required placeholder="Enter your email" />
        <button href="" id="loginbtn1" type="button" class="forgot" onclick="loginform()">Login to continue</button>
        <button type="submit" value="Send">Send</button>
      </form>
      <form id="otp_form" onsubmit="submitOtp(event)">
        <p id="otp_title" style="text-align:center;">Enter OTP sent to your email & new password</p>
        <input type="number" name="otp" id="otpbox" required placeholder="Enter your OTP" />
        <div style="position: relative;">
          <input type="password" name="newpassword" id="password1" required placeholder="Enter your password" style="display: block; width: 80%; margin: auto; margin-bottom: 20px;" />
          <button type="button" id="show-hide-button1" class="show-hide-button" onclick="togglePasswordVisibility1()"><i class="bi bi-eye-fill"></i></button>
        </div>
        <div style="position: relative;">
          <input type="password" name="confirmpassword" id="password2" required placeholder="Enter your password" style="display: block; width: 80%; margin: auto; margin-bottom: 20px;" />
          <button type="button" id="show-hide-button2" class="show-hide-button" onclick="togglePasswordVisibility2()"><i class="bi bi-eye-fill"></i></button>
        </div>
        <button href="" id="loginbtn2" type="button" class="forgot" onclick="loginform()">Login to continue</button>
        <button type="submit" value="Send">Submit</button>
      </form>
    </div>
  </div>
  <div id="loading"></div>
</body>

</html>        
