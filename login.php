<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full height for the page */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Background Image */
        body {
            background: url('images/home1.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Centering the form both vertically and horizontally */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: #fff;
        }

        /* Styling the login form */
        .login-form {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .login-form h2 {
            margin-bottom: 30px;
        }

        .login-form .form-label {
            color: #ddd;
        }

        .login-form input {
            border-radius: 5px;
        }

        .login-form button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-form">
            <h2 class="text-center">Admin Login</h2>
            <form action="authenticate.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

</body>

</html>
