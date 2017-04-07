<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
        <meta charset="utf-8">
        <title></title>

    </head>
    <body>
         <!-- checken of iemand ingelogd is -->
        <?php
        session_start();
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
        {
            header('Location: login_form.php');
            exit();
        }
        ?>
        <nav>
            <ul>
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#">je gecombineerde rooster</a>
                </li>
                <li>
                    <a href="#">code editor</a>
                </li>
            </ul>
        </nav>
        <section class="logo">
            <a href="https://www.alfa-college.nl/"><img src="img/alfa-logo-2015.png" alt="alfaLogo"></a>
        </section>
        <section id="code">
            <a href="code.php" id="codeImg"><img src="img/editor.png" alt=""></a>
        </section>
    </body>
</html>
