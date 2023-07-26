<html>
<head>
    <title>LOGIN</title>

</head>
<body>
    <?php
        $ad = "admin";
        $sifre = "admin";

        if(isset($_POST['send'])){
            if($_POST['ad'] == $ad && $_POST['sifre'] == $sifre){
                header("Location: panel.php");
            }
            else{
                header("Location: panel.php?error=HATALIGIRIS");
            }
        }
    ?>

    <form action="admingiris.php" method="POST">
        <legend>LOGIN</legend>
        <br>Kullanıcı Adı: <input name="ad" type="text">
        <br>
        <br>Şifre: <input name="sifre" type="password">
        <br><input type="submit" name="send" value="Send">
    </form>
</body>
</html>