<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lab 3 - Registration Form</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-card">
        <h2 class="text-center mb-4">Registration Form</h2>

        <form action="register_process.php" method="POST">

            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Gender</label>

                <input type="radio" name="gender" value="Male" id="male" required>
                <label for="male" class="me-3">Male</label>

                <input type="radio" name="gender" value="Female" id="female">
                <label for="female">Female</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <select name="course" class="form-select" required>
                    <option value="">-- Select Course --</option>
                    <option value="BS Computer Science">BS Tourism Management</option>
                    <option value="BS Information Technology">BS Information Technology</option>
                    <option value="BS Information Systems">BS Nursing</option>
                    <option value="BS Computer Engineering">BS Basic Education</option>
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>