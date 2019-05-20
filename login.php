<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EasyLogin Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="frm">
      <form action="process.php" method="post">
        <p>
        <label>Username:</label>
        <input type="text" name="user" id="user"/>
        </p>
        <p>
        <label>Password:</label>
        <input type="password" name="pass" id="pass"/>
        </p>
        <p>
          <input type="submit" id="btn" value="login">
        </p>
      </form>

    </div>

  </body>
</html>
