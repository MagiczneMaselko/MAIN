<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link href="style.css" rel="stylesheet">
        <title>LOGOWANIE</title>
    </head>
    <body>
        <center>
            <h1>
                LOGOWANKO
            </h1>
            <br>
            <form method = "post">
                LOGIN:*
                <br>
                <input type="text" name="login" id="login">
                <br>
                HASŁO:*
                <br>
                <input type="password" name="haslo">
                <br>
                <br>
                <input type="submit" name="Załóż konto">
                <br>
                <?php include 'PHP/PHP_logowanie.php'; ?> <!--DOŁĄCZANIE PLIKU PHP (w razie czego zmienić ściezka)-->
                <br>
                <br>
                <br>
                <a href="rejestracja.php"> REJESTRACJA</a>
        </center>
    </body>
</html>