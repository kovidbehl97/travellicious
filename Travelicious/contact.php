<?php
#recive user input
$first_name = "first name: $_POST['first_name'];"
$last_name = "last name: $_POST['last_name'];"
$your_email = $_POST['your_email'];
$phone_number = $_POST['phone_number'];
$state_province = $_POST['state_province'];
$country = $_POST['country'];
$city = $_POST['city']


$sent = mail('harshit.behl1696@gmail.com', 'trip inquiry', $first_name,$last_name)
?>