<!DOCTYPE html>
<html lang="eng">
<head>
<meta chatset="UTF-8">
<meta http-equiv="X-UA-Comptible" content="IE-edge"/>
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<title> BLOG </title>
<link href="./style.css" rel="stylesheet" />
</head>
<body>

    <?php
    if(isset($_POST['send'])){

        $db = new PDO("sqlite:db/sqlite.db");
        $title = $_POST['title'];
        $email = $_POST['email'];
        $des = $_POST['messages'];

        $message = $db->query('SELECT * FROM contact ');
        $db->exec("INSERT INTO contact ( kuladi, email, mesaj) VALUES ('$title' , '$email' , '$des');");
    }
    ?>

    <nav class="aqq_header">
    <a class="app_logo" href="/">
        <img class="app_gif" src="wired-lineal-27-globe.gif" />
        <img class="purple__logo" src="wired-lineal-69-eye.gif" />
    </a>
    <ul class="app_links">
    <li class="active"></li>
    <li></li>
    <li> <a href="contact.php"></a></li>
    <li>Kaydol</li>
    <li>Paylaşım</li>
    </ul>
    </nav>

    <form aciton= "mesaj.php" method="POST">
    <input type="text" name="title" id=""><br> 
    <input type="email" name="email" id=""><br> 
    <input type="text" name="messages" id=""><br> 

    <input name="send" type="submit" value="send">



    </form>
</body>
</html>

