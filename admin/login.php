<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/stylesadmin.css">
    <title>Login Admin</title>
    <link rel="icon" href="assets/icons/logo.png" type="image/png">
</head>

<body>
    <div class="container">
        <form action="login_action.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="txtUsername" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="txtPassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

    </form>
</body>

</html>