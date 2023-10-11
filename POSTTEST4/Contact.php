<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cartoon recommendation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class ="more" id="more">
        <div class="form">
            <div class="box form-box">
                <header>
                    <h6>Login</h6>
                    <nav class="navigasi">
                        <a href="index.php" class="nav">Kembali</a>
                    </nav>
                </header>
                <form action="output.php" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="Email" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>
                    <div class="links">
                        Dont have account? <a href="register.html">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>