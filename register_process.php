<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lab 3 - Registration Result</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-card">

<?php
$first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$course = $_POST["course"];

$regex = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{5,20}$/";

if (!preg_match($regex, $password)) {
    echo '<div class="alert alert-danger">';
    echo "Password should contain at least one uppercase, one lowercase, one number, no white spaces, minimum of 5 characters, maximum of 20 characters.";
    echo '</div>';
}
elseif ($password != $confirm) {
    echo '<div class="alert alert-danger">';
    echo "Password don't match!";
    echo '</div>';
}
else {
    echo '<div class="alert alert-success">';
    echo "<h4>Registration Successful!</h4>";
    echo '</div>';

    echo "First Name: $first<br>";
    echo "Last Name: $last<br>";
    echo "Email: $email<br>";
    echo "Birthday: $birthday<br>";
    echo "Gender: $gender<br>";
    echo "Course: $course<br>";
}
?>

        <div class="d-grid mt-4">
            <a href="register.php" class="btn btn-secondary">Back to Form</a>
        </div>

    </div>
</div>

</body>
</html>