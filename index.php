<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Student registration form">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="container py-4 py-md-5">
    <section class="form-card" aria-labelledby="form-title">
        <p class="eyebrow">Student services</p>
        <h1 id="form-title">Create your registration</h1>
        <p class="intro">Enter your details below to submit your student registration.</p>

        <form action="register_process.php" method="POST">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="first" class="form-label">First name</label>
                    <input type="text" name="first" id="first" class="form-control" autocomplete="given-name" required>
                </div>
                <div class="col-md-6">
                    <label for="last" class="form-label">Last name</label>
                    <input type="text" name="last" id="last" class="form-control" autocomplete="family-name" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" minlength="5" maxlength="20" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{5,20}" autocomplete="new-password" required>
                    <div class="form-text">5-20 characters, with uppercase, lowercase, and a number.</div>
                </div>
                <div class="col-md-6">
                    <label for="confirm" class="form-label">Confirm password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" autocomplete="new-password" required>
                </div>
                <div class="col-md-6">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="form-control" autocomplete="bday" required>
                </div>
                <fieldset class="col-md-6">
                    <legend class="form-label">Gender</legend>
                    <div class="d-flex gap-3 pt-2">
                        <label class="choice"><input type="radio" name="gender" value="Male" required> Male</label>
                        <label class="choice"><input type="radio" name="gender" value="Female"> Female</label>
                    </div>
                </fieldset>
                <div class="col-12">
                    <label for="course" class="form-label">Course</label>
                    <select name="course" id="course" class="form-select" required>
                        <option value="">Select a course</option>
                        <option value="BS Tourism Management">BS Tourism Management</option>
                        <option value="BS Information Technology">BS Information Technology</option>
                        <option value="BS Nursing">BS Nursing</option>
                        <option value="BS Basic Education">BS Basic Education</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-4">Submit registration</button>
        </form>
    </section>
</main>
</body>
</html>