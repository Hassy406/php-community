<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<head>
    <title>
        Login
    </title>
</head>
<body>
    <form action="./login.php" method="post">
        <input class="text email" type="email" name="email" placeholder="Email" required><br>
        <input class="password" type="password" name="pass" placeholder="Password" required><br>
        <input type="submit" value="LOGIN">
    </form>
    <a href="signup.html">Sign up!</a>
</body>
</html>