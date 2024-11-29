<?php
$servername = "srv544.hstgr.io";
$username = "u745359346_hrms_wdiaug_24";
$password = "WDI_HRMS_aug_24_calanjiyam#2024";
$dbname = "u745359346_hrms_wdiaug_24";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT teamId,name,email,description FROM teams";
$result=mysqli_query($conn, $sql);
echo"<table><tr><th>teamId</th><th>name</th><th>email</th><th>description</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo"<tr>
                        <td>".$row["teamId"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["description"]."</td>
                    </tr>";
}
?>
//data2.php


<?php
$servername = "srv544.hstgr.io";
$username = "u745359346_hrms_wdiaug_24";
$password = "WDI_HRMS_aug_24_calanjiyam#2024";
$dbname = "u745359346_hrms_wdiaug_24";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM departments";
$result=mysqli_query($conn, $sql);
echo"<table><tr><th>depId</th><th>name</th><th>email</th><th>description</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo"<tr>
                        <td>".$row["depId"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["description"]."</td>
                    </tr>";
}
?>
//data3.php


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
