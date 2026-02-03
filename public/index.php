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
        <p>Log in to access your CafeEthereal Account</p>
        
        <form class="login-form" id="loginForm">
            
            <div class="form-group">
                <label for="id_number">ID Number</label>
                <input type="text" id="id_number" name="id_number" required>
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
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="resources/js/login.js"></script>
    <script src="/CafeEtherealPayroll/resources/js/_utils/app-constants-utils.js"></script>
    <script src="/CafeEtherealPayroll/resources/js/_utils/swal-message-utils.js"></script>
    
</body>
</html>