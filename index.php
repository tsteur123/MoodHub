<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mijn eerste loginscript!</title>
</head>

<body>
<h1>Inloggen</h1>
<form method="post" action="login.php">
    <p>
        <label for="user">Gebruikersnaam:</label>
        <input type="text" name="user" id="users" />
    </p>
    <p>
        <label for="pass">Wachtwoord:</label>
        <input type="password" name="pass" id="pass" />
    </p>
    <p>
        <input type="submit" value="Inloggen" />
    </p>
</form>
</body>
</html>
