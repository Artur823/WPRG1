<?php
session_start();

// Sprawdzenie, czy użytkownik jest już zalogowany
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: welcome.php"); // Przekierowanie do strony powitalnej, jeśli użytkownik jest już zalogowany
    exit;
}

$valid_username = "user";
$valid_password = "password";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sprawdzenie poprawności loginu i hasła
    if($username === $valid_username && $password === $valid_password) {
        // Zalogowanie użytkownika
        $_SESSION['logged_in'] = true;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Błędny login lub hasło!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz Logowania</title>
</head>
<body>
<h2>Formularz Logowania</h2>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<form method="post" action="">
    <label for="username">Login:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Hasło:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="login" value="Zaloguj">
</form>
</body>
</html>
