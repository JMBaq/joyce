<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("image/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f5f5f5;
            padding-left: 40px; 
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #999; 
        }

        .input-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999; 
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #B19CD9;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
            position: relative; 
            text-align: center;
        }

        button:hover {
            background-color: #E6E6FA;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create an Account</h1>
        <form action="process_signup.php" method="POST" novalidate>
            <div style="position:relative;">
                <i class="fas fa-user input-icon" aria-label="Username"></i>
                <input autocomplete="off" type="text" placeholder="Username" name="username">
            </div>
            <div style="position:relative;">
                <i class="fas fa-envelope input-icon" aria-label="Email Address"></i>
                <input autocomplete="off" type="email" placeholder="Email Address" name="email">
            </div>
            <div style="position:relative;">
                <i class="fas fa-lock input-icon" aria-label="Password"></i>
                <input autocomplete="off" type="password" placeholder="Create a Password" id="password" name="password">
            </div>
            <div style="position:relative;">
                <i class="fas fa-lock input-icon" aria-label="Confirm Password"></i>
                <input autocomplete="off" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
            </div>
            <button>
                <span class="text">Sign Up</span>
            </button>
            <div class="signup-link">Already have an account? <a href="login.php">Log in</a></div>
        </form>
    </div>
</body>

</html>
