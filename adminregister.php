<!DOCTYPE html>
<head><title> Login </title></head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="adminlogin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="password">Confirm password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Login</button>
            
        </form>

    </div>
</body>
</html>
<?php

?>