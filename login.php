<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - WEB TEKNOLOGI INFORMASU</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index.html" method="post" enctype="multipart/form-data">
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="checkbox" name="ingat" value="remember"><br>
        <label>Remember Me!</label><br>
        <input type="submit" value="Login">
        <input type="reset" value="Reset"><br>
        <label>lupa password ?</label><br>
        <input type="checkbox" name="lupa" value="forgot"><br>
        <label>kirim email untuk reset password</label><br>
        <input type="email" name="email"><br>  
        <input type="submit" value="kirim">
    </form>
    <p>belum punya akun ? <a href="register.html">Daftar</a></p>
</body>
</html>