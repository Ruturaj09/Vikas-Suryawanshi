<?php 
2
use PHPMailer\PHPMailer\PHPMailer;
3
​
4
if(isset($_POST['name']) && isset($_POST['email'])){
5
    $name = $_POST['name'];
6
    $email = $_POST['email'];
7
    $MobileNo = $_POST['MobileNo'];
8
    $address = $_POST['address'];
9
​
10
    require_once "PHPMailer/PHPMailer.php";
11
    require_once "PHPMailer/SMTP.php";
12
    require_once "PHPMailer/Exception.php";
13
​
14
    $mail = new PHPMailer();
15
​
16
    //smtp settings
17
    $mail->isSMTP();
18
    $mail->Host = "smtp.gmail.com";
19
    $mail->SMTPAuth = true;
20
    $mail->Username = "ruturajpujari99@gmail.com";
21
    $mail->Password = '9404005919123456';
22
    $mail->Port = 465;
23
    $mail->SMTPSecure = "ssl";
24
​
25
    //email settings
26
    $mail->isHTML(true);
27
    $mail->setFrom($email, $name);
28
    $mail->addAddress("ruturajpujari999@gmail.com");
29
    $mail->MobileNo = ("$email ($MobileNo)");
30
    $mail->address = $address;
31
​
32
    if($mail->send()){
33
        $status = "success";
34
        $response = "Email is sent!";
35
    }
36
    else
37
    {
38
        $status = "failed";
39
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
40
    }
41
​
42
    exit(json_encode(array("status" => $status, "response" => $response)));
43
}