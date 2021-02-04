<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $miss = false;
    $pass = "Rick2oo1";
    $user_pass = $_POST["pass"];
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    
    if(password_verify($user_pass,$hash)){
        header("Location:prc10_2.html");
    }else{
        header("Location:prc10.php");
        $miss = true;
    }
    ?>
</body>
</html>