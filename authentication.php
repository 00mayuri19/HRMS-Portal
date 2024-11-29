<?php
include '../connection.php';
//validate wether the request method is post or not
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    //if not post send a message called as 'bad request' with response code 400
    http_response_code(400);
    echo json_encode(array('message' => 'Bad Request'));
}
else{
    //if post check if the post array contains email and password keys
    if (isset($_POST['sub'])) {
        //run a sql query to check if the email and password exists in the table employees with status active
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `employees` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        //check if the query result is not empty
        if (mysqli_num_rows($result) > 0) {
            // generate a token for the user with encoded information of empId, name, email, role and timestamp in IST
            date_default_timezone_set('Asia/Kolkata');
            $row = mysqli_fetch_assoc($result);
            $empId = $row['empId'];
            $name = $row['name'];
            $email = $row['email'];
            $role = $row['role'];
            $token = array(
                'empId' => $empId,
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'timestamp' => date('Y-m-d H:i:s')
            );
            if($data['pass']==$password && $data['email']==$email){
                echo"login successfull";
            }
            //send a request to 'https://cms.acte.ltd/api/openssh?algorithm=rsa&size=2048&passphrase='

            // define your 32-digit private key
            $privateKey = '-----BEGIN OPENSSH PRIVATE KEY-----
            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
            -----END OPENSSH PRIVATE KEY-----
            ';
            
            // convert the token to a JSON string
            $jsonToken = json_encode($token);
            
            // define the encryption algorithm and options
            $algorithm = 'aes-256-cbc';
            $options = OPENSSL_RAW_DATA;
            
            // generate an initialization vector (IV)
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($algorithm));
            
            // encrypt the token using the private key and IV
            $encryptedToken = openssl_encrypt($jsonToken, $algorithm, $privateKey, $options, $iv);
            
            // encode the encrypted token and IV as a base64-encoded string
            $base64EncryptedToken = base64_encode($encryptedToken . '::' . $iv);
            
            // send a message called as 'success' with response code 200
            http_response_code(200);
            echo json_encode(array('token' => $base64EncryptedToken, 'message' => 'success'));
        }
        else{
            //if the result is empty send a unauthorized message with response code 401
            http_response_code(401);
            echo json_encode(array('message' => 'Invalid credentials'));
        }
    }
    else{
        //if not present send a message called as 'bad request' with response code 400
        http_response_code(400);
        echo json_encode(array('message' => 'Bad Request'));
    }
}
?>
