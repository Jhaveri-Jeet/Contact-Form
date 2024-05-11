<?php


include './validation.php';
header('Content-Type: application/json');

$name = $_POST['name'];
$validateName = validateName($name);
$number = $_POST['number'];
$validateNumber = validateNumber($number);
$email = $_POST['email'];
$validateEmail = validateEmail($email);
$subject = $_POST['subject'];
$validateSubject = validateSubject($subject);
$msg = $_POST['msg'];
$validateMessage = validateMessage($msg);

// validating the name
if (!$validateName) {
    echo json_encode(['name' => false]);
    return;
}

// validating the number
if (!$validateNumber) {
    echo json_encode(['number' => false]);
    return;
}

// validating the email
if (!$validateEmail) {
    echo json_encode(['email' => false]);
    return;
}

// validating the subject
if (!$validateSubject) {
    echo json_encode(['subject' => false]);
    return;
}

// validating the message
if (!$validateMessage) {
    echo json_encode(['msg' => false]);
    return;
}

$ip = $_SERVER['REMOTE_ADDR'];
$connection = new PDO("mysql:host=localhost;dbname=showroom", 'root', '');
$query = 'INSERT INTO `contact_form` (`Full_Name`, `Mobile_Number`, `Email`, `Subject`, `Message`, `Ip`) VALUES(?,?,?,?,?,?)';
$params = [$name, $number, $email, $subject, $msg, $ip];
$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(['success' => true]);
else
    echo json_encode(['success' => false]);
