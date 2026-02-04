<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Ethereal | Login</title>
    <link rel="icon" type="image/png" href="/CafeEtherealPayroll/resources/images/cafe_logo.png">
    <link rel="stylesheet" href="/CafeEtherealPayroll/resources/css/login-form.css"/>
</head>
<body>

    <div class="login-container">
        <h2>Welcome Back</h2>
        <p>Log in to access your Account</p>
        
        <form class="/PDOConnection/app/controller/Login.php" id="loginForm">
            
            <div class="form-group">
                <label for="gmail">Email Account </label>
                <input type="text" id="gmail" name="gmail" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="btn btn-primary">
                Secure Sign In
            </button>
        </form>

        <div class="footer-links">
            <a href="#">Forgot Password?</a>
            <span>|</span>
            <a href="RegistrationForm.html">Need an Account?</a>
        </div>
    </div>
</body>
</html>