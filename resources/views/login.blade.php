<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #e0e7ff, #f3f4f6);
    }

    .login-box {
        width: 100%;
        max-width: 380px;
        background: white;
        padding: 35px;
        border-radius: 14px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        animation: fadeIn 0.4s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #111827;
    }

    .input-group {
        margin-bottom: 15px;
    }

    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        outline: none;
        transition: 0.2s;
    }

    input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37,99,235,0.2);
    }

    button {
        width: 100%;
        padding: 12px;
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.2s;
    }

    button:hover {
        background: #1d4ed8;
    }

    .footer-text {
        text-align: center;
        margin-top: 15px;
        font-size: 13px;
        color: #6b7280;
    }

    .footer-text a {
        color: #2563eb;
        text-decoration: none;
    }

    .footer-text a:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>

<div class="login-box">
    <h2>Welcome Back</h2>

    <form method="POST" action="/login">
        @csrf

        <div class="input-group">
            <input type="email" name="email" placeholder="Email address" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <div class="footer-text">
        Forgot password? <a href="#">Reset here</a>
    </div>
</div>

</body>
</html>