<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page</title>
    <link rel="stylesheet" href="../php/style.css">

    <style>
        body {
            background-image: url("../images/peaceful images.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    
</head>
<body class="body2">
    <div class="login-container2">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])): ?>
            <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <form action="../php/display_db.php" onsubmit="return authenticate()" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required="required" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="required" autocomplete="off">
            </div>
            <input class="btn btn-success my-4" id="submit" type="submit" value="Login" name="apply">
        </form>
    </div>
    <script>
        function authenticate(){
            var authorised;

            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;

            if(username=="Asirselwin03" && password=="Ammapayan03"){
                authorised=true;
            }else if(username=="Heberians" && password=="bhh2024") {
                authorised=true;
            } else {
                authorised=false;
                alert("Sorry,username or password is incorrect.");
            }
            return authorised;
        }
        </script>
</body>
</html>
