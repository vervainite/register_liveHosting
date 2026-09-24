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
$submitted = $_SERVER["REQUEST_METHOD"] === "POST";
$first = trim((string) ($_POST["first"] ?? ""));
$last = trim((string) ($_POST["last"] ?? ""));
$email = trim((string) ($_POST["email"] ?? ""));
$password = (string) ($_POST["password"] ?? "");
$confirm = (string) ($_POST["confirm"] ?? "");
$birthday = trim((string) ($_POST["birthday"] ?? ""));
$gender = trim((string) ($_POST["gender"] ?? ""));
$course = trim((string) ($_POST["course"] ?? ""));

$escape = static fn (string $value): string => htmlspecialchars($value, ENT_QUOTES, "UTF-8");
$validGenders = ["Male", "Female"];
$validCourses = [
    "BS Tourism Management",
    "BS Information Technology",
    "BS Nursing",
    "BS Basic Education",
];

$regex = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{5,20}$/";

if (!$submitted || $first === "" || $last === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $birthday === "" || !in_array($gender, $validGenders, true) || !in_array($course, $validCourses, true)) {
    echo '<div class="alert alert-danger">Please complete all fields with valid information.</div>';
}
elseif (!preg_match($regex, $password)) {
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

    echo "First Name: {$escape($first)}<br>";
    echo "Last Name: {$escape($last)}<br>";
    echo "Email: {$escape($email)}<br>";
    echo "Birthday: {$escape($birthday)}<br>";
    echo "Gender: {$escape($gender)}<br>";
    echo "Course: {$escape($course)}<br>";
}
?>

        <div class="d-grid mt-4">
            <a href="index.php" class="btn btn-secondary">Back to Form</a>
        </div>

    </div>
</div>

</body>
</html>