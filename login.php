<?php
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST")
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();

  if($user)
  {
    if(password_verify($_POST["password"], $user["password_hash"]))
    {
      session_start();
      session_regenerate_id();
      $_SESSION["user_id"] = $user["id"];
      header("Location: index.php");
      exit;
    }
  }
  $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 30px;
        }

        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #f5f5f5;
            font-size: 16px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            background-color: #e0e0e0;
        }

        button {
          width: 100%;
          padding: 14px;
          background-color:  #B19CD9; 
          color: #fff;
          border: none;
          border-radius: 8px;
          cursor: pointer;
          font-size: 18px;
          transition: background-color 0.3s;
        }

        button:hover {
            background-color: #E6E6FA;
        }

        p.error-message {
            color: #dc3545;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
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
    <div class="login-container">
        <h1>Login</h1>

        <?php if ($is_invalid) : ?>
            <p class="error-message">Invalid email or password</p>
        <?php endif; ?>

        <form method="post">
            <input autocomplete="off" type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <input autocomplete="off" type="password" class="form-control" placeholder="Password" name="password" id="password">
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>

</html>