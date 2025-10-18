<?php

$fname = $_POST['fname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$quote = $_POST['quote'];

echo "You are $fname, a $age-year-old $gender.<br>";
echo "Your motto in life is: \"$quote\"";